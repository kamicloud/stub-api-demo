<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RevisionIgnore
 *
 * @property int $id
 * @property int $reversion_id
 * @property string $pattern
 * @property string $type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore wherePattern($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore whereReversionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionIgnore whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RevisionIgnore extends Model
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
