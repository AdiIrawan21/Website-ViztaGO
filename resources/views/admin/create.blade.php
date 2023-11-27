@extends('layouts/admin')
@section('content')
<div class="container mt-4">
    <a href="/admin" class="btn btn-secondary">Kembali</a>
    <h2>Tambah Wisata</h2>
    

    <form action="/admin" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="id_wisata">Id </label>
            <input type="text" class="form-control" id="id_wisata" name="id_wisata" value="{{ Session::get('id_wisata') }}">
        </div>

        <div class="form-group">
            <label for="judul"> Judul </label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ Session::get('judul') }}">
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ Session::get('lokasi') }}">
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10">{{ Session::get('deskripsi') }}</textarea>
        </div>

        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept=".jpg, .jpeg, .png">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
