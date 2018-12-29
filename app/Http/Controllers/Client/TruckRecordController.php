<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

use App\Models\{
    Truck,
    TruckRecord
};

use DB;

class TruckRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $state = $request->state;
        $truckId = $request->truckId;
        DB::enableQueryLog();
        // // dd($truckId);
        $truck = Truck::with([
            'truckRecords',
        ])->first();
        unset($truck->truckRecords[1]);
        $truckRecords = $truck->truckRecords->values();
        // $truck->truck_records = $truck->truckRecords->toBase();
        $truck->setRelation('truckRecords', $truckRecords);
        dd($truck->toArray());
        $truckRecordQuery = TruckRecord::where(function($query) use ($truckId) {
            if ($truckId) {
                $query->where('truck_id', $truckId);
            }
        })->orderBy('time', 'desc')->orderBy('truck_id', 'desc');
        if ($state === 'recent') {
            $truckRecordQuery->groupBy('truck_id');
        }
        $truckRecords = $truckRecordQuery->get();
        // dd(DB::getQueryLog());
        return [
            'truckRecords' => $truckRecords,
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        //
    }
}
