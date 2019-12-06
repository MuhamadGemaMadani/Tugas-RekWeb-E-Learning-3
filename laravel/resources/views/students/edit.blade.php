@extends('layout/main')

@section('title' ,'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
            <form method="post" action="students/{{$students->id}}">
            @method('patch')
            @csrf

           
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan nama" value="{{$students->nama}}" >
                @error('nama')
                    <div class="invalid-feedback"> {{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nrp">nrp</label>
                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Masukan nrp" value="{{$students->nrp}}">
                @error('nrp')
                    <div class="invalid-feedback"> {{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan email" value="{{$students->email}}">
                @error('email')
                    <div class="invalid-feedback"> {{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jurusan">jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" placeholder="Masukan jurusan" value="{{$students->nama}}" value="{{$students->jurusan}}">
                @error('jurusan')
                    <div class="invalid-feedback"> {{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ubah Data Mahasiswa</button>
        


            </form>
        </div>
    </div>
</div>
@endsection
