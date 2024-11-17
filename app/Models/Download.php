<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use App\Traits\SaveToUpper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

final class Download extends Model
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
        'description',
    ];

    protected $appends = [
        'url',
    ];

    public function getUrlAttribute()
    {
        if ($this->firstMedia('download')) {
            return $this->firstMedia('download')->getUrl();
        }

        return asset('img/avatar.jpg');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];
}
