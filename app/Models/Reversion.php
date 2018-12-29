<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reversion
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ReversionFile[] $phpcs
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ReversionFile[] $phpstan
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reversion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reversion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reversion query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reversion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reversion whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reversion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Reversion whereUpdatedAt($value)
 */
class Reversion extends Model
{

    public function phpcs()
    {
        return $this->hasMany(ReversionFile::class)->where('sniffer', 'PHPCS');
    }

    public function phpstan()
    {
        return $this->hasMany(ReversionFile::class)->where('sniffer', 'PHPSTAN');
    }

    // public function reversionIgnores()
    // {
    //     return $this->hasMany(ReversionIgnore::class);
    // }
}
