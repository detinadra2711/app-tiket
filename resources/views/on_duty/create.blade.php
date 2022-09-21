@extends('layout.master')

@section('head')
ON DUTY FLIGHT RESERVATION
@endsection

@section('content')
    
   
    <form action="/tiket_onduty" method="POST">
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
        <label>Time</label>
        <input type="time" name="time" class="form-control" placeholder="time" required="">
        {{-- <input type="time" name="time" class="form-control" placeholder="time" required=""> --}}
    </div>
        @error('time')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Maskapai</label>
        <select name="maskapai" class="form-control" id="">
            <option value="">--- pilih maskapai ---</option>
            @forelse ($maskapai as $item)
                <option value="{{ $item->id }}">{{ $item->nama_maskapai }}</option>
            @empty
                <option value="">Not Found</option>
            @endforelse
        </select>
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
        <label>Time</label>
        <input type="time" name="time_2" class="form-control" placeholder="time" >
        {{-- <input type="time" name="time" class="form-control" placeholder="time" required=""> --}}
    </div>
        @error('time_2')
        <div class="alert alert-danger">{{  $message }}</div>
        @enderror
    <div class="form-group">
        <label>Maskapai</label>
        <select name="maskapai_2" class="form-control" id="">
            <option value="">--- pilih maskapai ---</option>
            @forelse ($maskapai2 as $item)
                <option value="{{ $item->id }}">{{ $item->nama_maskapai }}</option>
            @empty
                <option value="">Not Found</option>
            @endforelse
        </select>
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