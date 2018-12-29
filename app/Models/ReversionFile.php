<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReversionFile
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ReversionReview[] $messages
 * @property-read \App\Models\Reversion $reversion
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $reversion_id
 * @property string $sniffer 嗅探器
 * @property string $name 文件名
 * @property array $contents
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile whereContents($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile whereReversionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile whereSniffer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionFile whereUpdatedAt($value)
 */
class ReversionFile extends Model
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
        return $this->belongsTo(Reversion::class);
    }

    public function messages()
    {
        return $this->hasMany(ReversionReview::class);
    }
}
