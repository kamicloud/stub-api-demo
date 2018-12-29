<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TruckRecord
 *
 * @property-read mixed $time
 * @property-read \App\Models\Truck $truck
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $area_id 地区标识符
 * @property int $truck_id 节点号
 * @property float $latitude 纬度
 * @property float $longitude 经度
 * @property float $altitude 海拔
 * @property string $altitude_unit 海拔单位
 * @property float $weight 重量
 * @property string $weight_unit 重量单位
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereAltitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereAltitudeUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereTruckId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TruckRecord whereWeightUnit($value)
 */
class TruckRecord extends Model
{
    protected $fillable = [
        'area_id',
        'truck_id',
        'time',
        'latitude',
        'longitude',
        'altitude',
        'altitude_unit',
        'weight',
        'weight_unit',
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }

    public function getTimeAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }
}
