<?php

use Illuminate\Database\Seeder;
use App\Models\{
    Truck,
    TruckRecord
};

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Truck::create();
        for ($i = 0; $i < 50; $i++)
        TruckRecord::create([
            'area_id' => 1,
            'truck_id' => rand(1, 5),
            'time' => time() + $i * 30,
            'longitude' => (116404 + $i * 2) / 1000,
            'latitude' => (39915 + $i * 2) / 1000,
            'altitude' => rand(-2000000, 10000000) / 1000,
            'altitude_unit' => '米',
            'weight' => rand(0, 8000),
            'weight_unit' => '千克',
        ]);
    }



}
