@extends('layout.master')



@section('content')
<style>
    .card-body {
       
    }
</style>
<h4>User Guide : </h4>
<p>1. User harus <a href="{{ url('login') }}">Login</a> terlebih dahulu untuk melakukan reservasi tiket</p>
<p>2. Apabila user belum memiliki akun, silahkan buat akun di halaman <a href="{{ url('register') }}">Register</a></p>
<p>3. Buat Reservasi pada menu Reservasi Tiket <u>On Duty</u> untuk melakukan reservasi ON DUTY</p>
<p>4. Buat Reservasi pada menu Reservasi Tiket <u>Off Duty</u> untuk melakukan reservasi OFF DUTY</p>


@endsection

