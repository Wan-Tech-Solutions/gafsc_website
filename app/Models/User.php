<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use Database\Factories\UserFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;
use Plank\Mediable\Mediable;
use Propaganistas\LaravelPhone\Casts\RawPhoneNumberCast;
use Spatie\Permission\Traits\HasRoles;

/**
 * App\Models\User.
 *
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 *
 * @method static UserFactory factory(...$parameters)
 * @method static Builder|User findByUuid(string $uuid)
 * @method static Builder|User findOrFailByUuid(string $uuid)
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 *
 * @method static Builder|User whereUuid($value)
 *
 * @property-read Collection|Post[] $posts
 * @property-read int|null $posts_count
 */
final class User extends Authenticatable implements \Spatie\Onboard\Concerns\Onboardable, MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use Mediable;
    use InteractsWithUuid;
    use Notifiable;
    use HasRoles;
    use \Spatie\Onboard\Concerns\GetsOnboarded;
    use Impersonate;
    use TwoFactorAuthenticatable;
    // use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'uuid',
        'name',
        'email',
        'password',
        'prefix',
        'first_name',
        'other_names',
        'phone',
        'user_id',
        'password',
        'sex',
        'dob',
        'time_zone',
        'country',
        'address',
        'display_name',
        'referral_code',
        'referred_by',
        'account_verified_at',
        'account_blocked_at',
        'business_name',
        'is_business',
        'verification_code',
        'verification_code_expires_at',
        'otp',
        'created_at',
        'theme',
        'email_verified_at',
    ];

    protected $appends = [
        'initials',
        'full_name',
        'avatar',
        'identity',
        'masked_email',
        // 'second_level_downlines'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'date:D, M d, Y',
        'account_verified_at' => 'datetime',
        'account_blocked_at' => 'datetime',
        'verification_code_expires_at' => 'datetime',
        'phone' => RawPhoneNumberCast::class.':country',
    ];

    public function getInitialsAttribute()
    {
        $initials = '';
        $name = $this->first_name.' '.$this->other_names;

        foreach (explode(' ', $name) as $name) {
            $initials .= strtoupper($name[0] ?? '');
        }

        return substr($initials, 0, 2);
    }

    public function getFullNameAttribute()
    {
        if ($this->is_business == 1) {
            return  $this->business_name;
        }

        return $this->prefix.' '.$this->first_name.' '.$this->other_names;
    }

    public function getAvatarAttribute()
    {
        if ($this->firstMedia('avatar')) {
            return $this->firstMedia('avatar')->getUrl();
        }

        return asset('img/avatar.jpg');
    }

    public function getMaskedEmailAttribute()
    {
        return mask_email($this->email);
    }

    public function getIdentityAttribute()
    {
        if ($this->hasMedia('identity')) {
            return $this->firstMedia('identity')->getUrl();
        }

        return asset('img/identity.png');
    }

    public function last_login()
    {
        return $this->hasOne(LoginLog::class, 'model_id', 'id')->latest();
    }

    public function logins()
    {
        return $this->hasMany(LoginLog::class, 'model_id', 'id');
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // $model['dob'] = Carbon::parse($model['dob']);
        });
    }
}
