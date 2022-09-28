@extends('layout.master')

@section('head')
LIST OF OFF DUTY RESERVATION
@endsection

@section('content')

@auth
    <a href="/tiket_offduty/create" class="btn bg-indigo btn-labeled btn-labeled-left">Tambah Reservasi</a> 
{{--  
            <a href="https://srikandi.layanan.go.id/user-satker/create" class="btn bg-indigo btn-labeled btn-labeled-left">
                <b><i class="icon-plus2"></i></b>Buat baru
            </a> --}}
{{-- <h6>
  MASKAPAI : <br>
  1. Batik + GA <br>
  2. Batik <br>
  3. Batik + Lions <br>
  4. Citilink <br>
</h6> --}}
    
@endauth
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">No HP</th>
      <th scope="col">Origin</th>
      <th scope="col">Date</th>
      <th scope="col">Flight</th>
      <th scope="col" style="text-align:center">Departure Time</th>
      <th scope="col" style="text-align:center">Arrival Time</th>
      <th scope="col">Maskapai</th>
      <th scope="col">Date</th>
      <th scope="col">Flight</th>
      <th scope="col" style="text-align:center">Departure Time</th>
      <th scope="col" style="text-align:center">Arrival Time</th>
      <th scope="col">Maskapai</th>
      <th scope="col">Akomodasi</th>
      <th scope="col">Status</th>
      <th scope="col">GFF</th>
      <th scope="col">BFF</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    {{-- $key adalah indexnya, $value adalah isi dari index --}}
    @forelse ($off_duty as $key => $value)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $value->full_name }}</td>
            <td>{{ $value->no_hp }}</td>
            <td>{{ $value->origin }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->flight }}</td>
            <td>{{ $value->departure_time }}</td>
            <td>{{ $value->arrival_time }}</td>
            <td>{{ $value->maskapai}}</td>
            <td>{{ $value->date_2 }}</td>
            <td>{{ $value->flight_2 }}</td>
            <td>{{ $value->departure_time2 }}</td>
            <td>{{ $value->arrival_time2 }}</td>
            <td>{{ $value->maskapai_2 }}</td>
            <td>{{ $value->akomodasi }}</td>
            <td>{{ $value->status }}</td>
            <td>{{ $value->gff }}</td>
            <td>{{ $value->bff }}</td>
            
            @auth
               <td>
                
                <form action="/tiket_offduty/{{ $value->id }}" method="POST">
                    {{-- <a href= "/helpdesk/{{ $value->id }}" class="btn btn-success btn-sm">Simpan</a> --}}
                    <a href= "/tiket_offduty/{{ $value->id }}" class="btn btn-info btn-sm">Detail</a>
                    

                    {{-- <a href= "/helpdesk/{{ $value->id }}/edit" class="btn btn-warning btn-sm">Edit</a> --}}
                    {{-- @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm"> --}}
                </form>
            </td> 
            @endauth
            
        </tr>
    @empty
        <tr>
            <td>Data Not Found</td>
        </tr>
    @endforelse
  </tbody>
</table>





@endsection