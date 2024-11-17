<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use App\Traits\SaveToUpper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Career extends Model
{
    use HasFactory;
    use InteractsWithUuid;
    use SaveToUpper;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'position',
        'description',
        'deadline',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'deadline' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($blog) {
            // $blog->description = str_replace('<li>', '<li> <i class="far fa-check"></i> ', $blog->description);
        });
    }
}
