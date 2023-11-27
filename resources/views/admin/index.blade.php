<!-- resources/views/admin/index.blade.php -->

@extends('layouts/admin')

@section('content')
<a href="/admin/create" class="btn btn-primary">+Tambah Data Wisata</a>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Thumbnail</th>
            <th>Id</th>
            <th>Judul</th>
            <th>Lokasi</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $admin)
            <tr>
                <td>
                    @if ($admin->thumbnail)
                        <img style="max-width:50px; max-height:50px" src="{{ asset('gambar').'/'.$admin->thumbnail }}" alt="thumbnail">
                    @endif
                </td>
                <td>{{ $admin->id_wisata }}</td>
                <td>{{ $admin->judul }}</td>
                <td>{{ $admin->lokasi }}</td>
                <td>{{ $admin->deskripsi }}</td>
                <td><a class="btn btn-secondary btn-sm" 
                href="{{ url('/admin/' .$admin->id_wisata) }}">Detail</a></td>
                <td><a class="btn btn-warning btn-sm" 
                href="{{ url('/admin/' .$admin->id_wisata.'/edit') }}">Edit</a></td>
                <td>
                    <form onsubmit="return confirm('Apakah yakin ingin menghapus data?')" action="{{ '/admin/'.$admin->id_wisata }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                    </form>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
{{ $data->links()}}
@endsection
