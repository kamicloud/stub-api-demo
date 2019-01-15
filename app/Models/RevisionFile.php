<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RevisionFile
 *
 * @property int $id
 * @property int $reversion_id
 * @property string $sniffer 嗅探器
 * @property string $name 文件名
 * @property array $contents
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\RevisionReview[] $messages
 * @property-read \App\Models\Revision $reversion
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile whereContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile whereReversionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile whereSniffer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionFile whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RevisionFile extends Model
{
    protected $fillable = [
        'name',
        'contents',
        'sniffer',
    ];

    protected $casts = [
        'contents' => 'array',
    ];

    public function reversion()
    {
        return $this->belongsTo(Revision::class);
    }

    public function messages()
    {
        return $this->hasMany(RevisionReview::class);
    }
}
