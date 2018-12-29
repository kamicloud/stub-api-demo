<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReversionIgnore
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $reversion_id
 * @property string $pattern
 * @property string $type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore wherePattern($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore whereReversionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionIgnore whereUpdatedAt($value)
 */
class ReversionIgnore extends Model
{
    protected $fillable = [
        'pattern',
        'type',
        'reversion_id',
        'status',
    ];


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('age', function(Builder $builder) {
            $builder->orWhere('reversion_id', 0);
        });
    }
}
