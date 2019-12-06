@extends('layout/main')
@section('title', 'Daftar Mahasiswa')
@section('container')
<div class ="container">
    <div class ="row">
        <div class ="col-10">
            <h1 class ="mt-3">Daftar Mahasiswa</h1>

            <a href="students/create" class="btn btn-primary my-3"> Tambah Data Mahasiswa</a>
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <ul class="list-group">
            @foreach($students as $studen)
                <li class="list-group d-flex justufy-content-between align-items-center">
                    {{ $studen->nama }}
                    <a href="students/{{ $studen->id }}" class="badge">detail</a>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection