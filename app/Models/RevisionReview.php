<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RevisionReview
 *
 * @property int $id
 * @property int $reversion_file_id
 * @property string $message
 * @property string $type
 * @property int $line
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Revision $revisionFile
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview whereReversionFileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RevisionReview whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RevisionReview extends Model
{
    protected $fillable = [
        'type',
        'message',
        'line',
    ];


    public function revisionFile()
    {
        return $this->belongsTo(Revision::class);
    }
}
