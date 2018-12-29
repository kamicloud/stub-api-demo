<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Truck
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TruckRecord[] $truckRecords
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name 卡车名
 * @property string $licence_plate 车牌号码
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck whereLicencePlate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Truck whereUpdatedAt($value)
 */
class Truck extends Model
{
    protected $fillable = [

    ];

    public function truckRecords()
    {
        return $this->hasMany(TruckRecord::class);
    }
}
