<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ReversionReview
 *
 * @property-read \App\Models\Reversion $reversionFile
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $reversion_file_id
 * @property string $message
 * @property string $type
 * @property int $line
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview whereReversionFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ReversionReview whereUpdatedAt($value)
 */
class ReversionReview extends Model
{
    protected $fillable = [
        'type',
        'message',
        'line',
    ];


    public function reversionFile()
    {
        return $this->belongsTo(Reversion::class);
    }
}
