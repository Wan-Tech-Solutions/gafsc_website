<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

final class Message extends Model
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
        'subject',
        'content',
        'show',
    ];

    protected $appends = [
        'doc',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public function getDocAttribute()
    {
        if ($this->firstMedia('message')) {
            return $this->firstMedia('message')->getUrl();
        }

        return asset('img/avatar.jpg');
    }
}
