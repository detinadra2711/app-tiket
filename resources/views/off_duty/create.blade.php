@extends('layout.master')

@section('head')
OFF DUTY FLIGHT RESERVATION
@endsection

@section('content')
    
   
    <form action="/tiket_offduty" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="full_name" class="form-control" placeholder="nama lengkap" required="">
    </div>
        @error('full_name')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control" placeholder="no hp" required="">
    </div>
        @error('no_hp')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Origin</label>
        <input type="text" name="origin" class="form-control" placeholder="origin" required="">
    </div>
        @error('origin')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Date</label>
        <input type="date" name="date" class="form-control" placeholder="date" required="">
    </div>
        @error('date')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Flight</label>
        <input type="text" name="flight" class="form-control" placeholder="flight" required="">
    </div>
        @error('flight')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Departure Time</label>
        <input type="time" name="departure_time" class="form-control" placeholder="departure time" required="">
         <label>Arrival Time</label>
        <input type="time" name="arrival_time" class="form-control" placeholder="arrival_time" required="">
    </div>
 
    <div class="form-group">
        <label>Maskapai</label>
        <input type="text" name="maskapai" class="form-control" placeholder="maskapai" required="">
    </div>

    <div class="form-group">
        <label>Date</label>
        <input type="date" name="date_2" class="form-control" placeholder="date" >
    </div>
        @error('date_2')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Flight</label>
        <input type="text" name="flight_2" class="form-control" placeholder="flight" >
    </div>
        @error('flight_2')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Departure Time</label>
        <input type="time" name="departure_time2" class="form-control" placeholder="departure time" >
        <label>Arrival Time</label>
        <input type="time" name="arrival_time2" class="form-control" placeholder="arrival_time2" >
    </div>

        @error('arrival_time2')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Maskapai</label>
        <input type="text" name="maskapai_2" class="form-control" placeholder="maskapai">
    </div>
        @error('maskapai_2')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Akomodasi</label>
        <input type="text" name="akomodasi" class="form-control" placeholder="akomodasi" required="">
    </div>
        @error('akomodasi')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Status</label>
        <input type="text" name="status" class="form-control" placeholder="status" required="">
        <i>isi dengan N/A bila tidak sedang <u>CUTI</u></i>
    </div>
        @error('status')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>GFF</label>
        <input type="text" name="gff" class="form-control" placeholder="gff" required="">
    </div>
        @error('gff')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>BFF</label>
        <input type="text" name="bff" class="form-control" placeholder="bff" required="">
    </div>
        @error('bff')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror

    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
    </div>     
</form>


@endsection