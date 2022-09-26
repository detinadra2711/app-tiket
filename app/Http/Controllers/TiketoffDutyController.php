<?php

namespace App\Http\Controllers;
use App\Models\TiketoffDuty;

use Illuminate\Http\Request;

class TiketoffDutyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $off_duty = TiketoffDuty::all();
        return view('off_duty.index', compact('off_duty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('off_duty.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'full_name' => 'required',
            'no_hp' => 'required',
            'origin' => 'required',
            'date' => 'required',
            'flight' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'maskapai' => 'required',
            'akomodasi' => 'required',
            'status' => 'required',
            'gff' => 'required',
            'bff' => 'required',
        ]);

        $off_duty = new TiketoffDuty;

        $off_duty->full_name = $request->full_name;
        $off_duty->no_hp = $request->no_hp;
        $off_duty->origin = $request->origin;
        $off_duty->date = $request->date;
        $off_duty->flight = $request->flight;
        $off_duty->departure_time = $request->departure_time;
        $off_duty->arrival_time = $request->arrival_time;
        $off_duty->maskapai = $request->maskapai;
        $off_duty->date_2 = $request->date_2;
        $off_duty->flight_2 = $request->flight_2;
        $off_duty->departure_time2 = $request->departure_time2;
        $off_duty->arrival_time2 = $request->arrival_time2;
        $off_duty->maskapai_2 = $request->maskapai_2;
        $off_duty->akomodasi = $request->akomodasi;
        $off_duty->status = $request->status;
        $off_duty->gff = $request->gff;
        $off_duty->bff = $request->bff;

        $off_duty->save();

        return redirect('/tiket_offduty');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
