<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\InteractsWithUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

final class Settings extends Model implements Auditable
{
    use HasFactory;
    use InteractsWithUuid;
    use \OwenIt\Auditing\Auditable;

    protected $appends = ['value'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'key',
        'configs',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'configs' => 'array',
    ];

    public function getValueAttribute()
    {
        if (! is_array($this->configs)) {
            return $this->configs;
        }

        return $this->configs;

        if (count($this->configs) < 2) {
            return $this->configs[0];
        } else {
            return $this->configs;
        }
    }
}
