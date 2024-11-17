<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

final class Publication extends Model
{
    use HasFactory;
    use InteractsWithUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'published_by',
        'type',
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

    protected $appends = [
        'short',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    public function getShortAttribute()
    {
        return str()->words(strip_tags($this->content), 50);
    }
}
