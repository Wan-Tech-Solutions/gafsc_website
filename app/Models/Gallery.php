<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use App\Traits\SaveToUpper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

final class Gallery extends Model
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
        'group',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];

    public static function boot()
    {
        parent::boot();

        static::deleting(function (self $model) {
            $mediabytag = $model->getAllMediaByTag();
            if ($mediabytag) {
                foreach ($mediabytag as $tag => $medias) {
                    foreach ($medias as $m) {
                        $model->detachMedia($m);
                        $m->delete();
                    }
                }
            }
        });
    }
}
