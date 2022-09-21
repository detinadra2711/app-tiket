<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TiketonDuty;
use App\Models\User;
use App\Models\Maskapai;
use App\Models\Maskapai2;

class TiketonDutyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $on_duty = TiketonDuty::all();
        // return $on_duty;
        return view('on_duty.index', compact('on_duty'));

        // $on_duty = TiketonDuty::get();
        // return view('on_duty.index', ['on_duty' => $on_duty]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $user = User::get();
        $maskapai = Maskapai::get();
        $maskapai2 = Maskapai2::get();
        // $on_duty = TiketonDuty::get();
        return view('on_duty.create', ['maskapai2' => $maskapai2, 'maskapai' => $maskapai]);

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
            'time' => 'required',
            'maskapai' => 'required',
            'akomodasi' => 'required',
            'status' => 'required',
            'gff' => 'required',
            'bff' => 'required',
        ]);

        $on_duty = new TiketonDuty;
        
        $on_duty->full_name = $request->full_name;
        $on_duty->no_hp = $request->no_hp;
        $on_duty->origin = $request->origin;
        $on_duty->date = $request->date;
        $on_duty->flight = $request->flight;
        $on_duty->time = $request->time;
        $on_duty->maskapai = $request->maskapai;
        $on_duty->date_2 = $request->date_2;
        $on_duty->flight_2 = $request->flight_2;
        $on_duty->time_2 = $request->time_2;
        $on_duty->maskapai_2 = $request->maskapai_2;
        $on_duty->akomodasi = $request->akomodasi;
        $on_duty->status = $request->status;
        $on_duty->gff = $request->gff;
        $on_duty->bff = $request->bff;

        $on_duty->save();

        return redirect('/tiket_onduty');
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
