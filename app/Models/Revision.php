<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Reversion
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ReversionFile[] $phpcs
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ReversionFile[] $phpstan
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Revision newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Revision newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Revision query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Revision whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Revision whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Revision whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Revision whereUpdatedAt($value)
 */
class Revision extends Model
{

    public function phpcs()
    {
        return $this->hasMany(RevisionFile::class)->where('sniffer', 'PHPCS');
    }

    public function phpstan()
    {
        return $this->hasMany(RevisionFile::class)->where('sniffer', 'PHPSTAN');
    }

    // public function reversionIgnores()
    // {
    //     return $this->hasMany(ReversionIgnore::class);
    // }
}
