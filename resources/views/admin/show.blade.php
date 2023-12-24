<!-- resources/views/admin/index.blade.php -->

@extends('layouts/admin')

@section('content')
<div>
    <a href="/admin" class="btn btn-secondary">Kembali</a>
    <h1>{{ $data->judul }}</h1>
    <p>
        <b>Id Wisata</b> {{ $data->id_wisata }}
    </p>
    <p>
        <b>Lokasi</b> {{ $data->lokasi }}
    </p>
    <p>
        <b>Deskripsi</b> {{ $data->deskripsi }}
    </p>
    <p>
        <b>Thumbnail</b><br>
        <img style="max-width:500px; max-height:500px" src="{{ asset('gambar').'/'.$data->thumbnail }}" alt="thumbnail">
    </p>
</div>
@endsection
