<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\PersonalAccessToken;
use LaravelAndVueJS\Traits\LaravelPermissionToVueJS;
use Plank\Mediable\Mediable;
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
final class Admin extends Authenticatable implements \Spatie\Onboard\Concerns\Onboardable
{
    use HasApiTokens;
    use HasFactory;
    use InteractsWithUuid;
    use Notifiable;
    use Mediable;
    use InteractsWithUuid;
    use HasRoles;
    use \Spatie\Onboard\Concerns\GetsOnboarded;
    use LaravelPermissionToVueJS;
    use Impersonate;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $appends = [
        'avatar',
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
        'password' => 'hashed',
    ];

    public function last_login()
    {
        return $this->hasOne(LoginLog::class, 'model_id', 'id')->latest();
    }

    public function logins()
    {
        return $this->hasMany(LoginLog::class, 'model_id', 'id');
    }

    public function getAvatarAttribute()
    {
        if ($this->firstMedia('avatar')) {
            return $this->firstMedia('avatar')->getUrl();
        }

        return asset('img/avatar.jpg');
    }
}
