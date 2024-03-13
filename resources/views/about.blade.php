@extends('layouts.main')

@include('sidebar.navbar')

@section('template')
    <div class="row">
        <div class="col-2">
            <img src="img/{{ $img }}" alt="" srcset="" width="90%" class="rounded-circle">
        </div>
        <div class="col-10">
            <h4>Nama : Gibran Ilham Budiman</h4>
            <h5>Kelas : XII-RPL1</h5>
            <h6>Visi misi:</h6>
            <p>Membuat yang tidak mungkin menjadi tidak mungkin</p>
        </div>
    </div>
@endsection
