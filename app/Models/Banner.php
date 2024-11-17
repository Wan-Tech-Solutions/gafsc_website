<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

final class Banner extends Model
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
        'sub_title',
        'url',
        'status',
        'order_of_appearance',
    ];

    protected $appends = [
        'img',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public function getImgAttribute()
    {
        if ($this->firstMedia('banner')) {
            return $this->firstMedia('banner')->getUrl();
        }

        return asset('img/avatar.jpg');
    }
}
