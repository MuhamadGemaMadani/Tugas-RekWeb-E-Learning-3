@extends('layout/main')

@section('title' ,'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Mahasiswa</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$students->nama}}</h5>
                    <h6 class="card-title mb-2 text-muted">{{$students->nrp}}</h6>
                    <p class="card-text">{{$students->email}}</p>
                    <p class="card-text">{{$students->jurusan}}</p>
                    
                    <a href="{{$students->id}}/edit" class="btn btn-primary">Edit</a>

                    <form action="{{$students->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection