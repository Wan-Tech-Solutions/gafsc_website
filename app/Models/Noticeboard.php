<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Plank\Mediable\Mediable;

final class Noticeboard extends Model
{
    use HasFactory;
    use InteractsWithUuid;
    use Mediable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:d M Y H:i a',
    ];

    public function getImgAttribute()
    {
        if ($this->firstMedia('noticeboard')) {
            return $this->firstMedia('noticeboard')->getUrl();
        }

        return asset('img/avatar.jpg');
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}
