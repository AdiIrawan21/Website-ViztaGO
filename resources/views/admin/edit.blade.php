@extends('layouts/admin')
@section('content')
<div class="container mt-4">
    <h2>Edit Wisata</h2>

    <a href="/admin" class="btn btn-secondary">Kembali</a>

    <form action="{{ '/admin/'.$data->id_wisata }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>ID :  {{ $data->id_wisata }}</h1>
        </div>
        <div class="mb-3">
            <label for="judul"> Judul </label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}">
        </div>

        <div class="mb-3">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $data->lokasi }}">
        </div>

        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $data->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept=".jpg, .jpeg, .png">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
