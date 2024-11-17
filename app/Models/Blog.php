<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use App\Traits\SaveToUpper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Plank\Mediable\Mediable;

final class Blog extends Model
{
    use HasFactory;
    use InteractsWithUuid;
    use Mediable;
    use SaveToUpper;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'sub_title',
        'published_by',
        'category',
        'content',
        'status',
        'slug',
    ];

    protected $appends = [
        'img',
        'short',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:d M Y H:i a',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    public function getImgAttribute()
    {
        if ($this->firstMedia('blog')) {
            return $this->firstMedia('blog')->getUrl();
        }

        return asset('img/avatar.jpg');
    }

    public function getShortAttribute()
    {
        return str()->words(strip_tags($this->content), 50);
    }
}
