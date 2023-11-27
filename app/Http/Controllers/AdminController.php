<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = admin::all();
        $data = admin::orderBy('id_wisata','asc')->paginate(5);
        return view('admin/index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menampilkan di isian create
        Session::flash('id_wisata', $request->id_wisata);
        Session::flash('judul', $request->judul);
        Session::flash('lokasi', $request->lokasi);
        Session::flash('deskripsi', $request->deskripsi);

        $request->validate([
            'id_wisata'=>'required | numeric',
            'judul' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'required|image|mimes:jpg, jpeg'
        ], [
            'id_wisata.required'=>'Id wajib diisi.',
            'judul.required'=>'Judul wajib diisi.',
            'lokasi.required'=>'Lokasi wajib diisi.',
            'deskripsi.required'=>'Deskripsi wajib diisi.',
            'thumbnail.required' => 'Silahkan masukkan gambar',
            'thumbnail.mimes'=>'Gambar hanya diperbolehkan berekstensi jpg, jpeg'
        ]);

        $fileName = time().'.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('gambar'), $fileName);
        
        $data = [
            'id_wisata' => $request->input('id_wisata'),
            'judul' => $request->input('judul'),
            'lokasi' => $request->input('lokasi'),
            'deskripsi' => $request->input('deskripsi'),
            'thumbnail' => $fileName
        ];
        admin::create($data);
        return redirect('/admin')->with('success','Berhasil memasukan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = admin::where('id_wisata', $id)->first();
        return view('admin/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = admin::where('id_wisata', $id)->first();
        return view('admin/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
        ], [
            'judul.required'=>'Judul wajib diisi.',
            'lokasi.required'=>'Lokasi wajib diisi.',
            'deskripsi.required'=>'Deskripsi wajib diisi.',
        ]);
        
        $data = [
            'judul' => $request->input('judul'),
            'lokasi' => $request->input('lokasi'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        if($request->hasFile('thumbnail')){
            $request->validate([
                'thumbnail' => '|image|mimes:jpg, jpeg'
            ], [
                'thumbnail.mimes' => 'Gambar hanya diperbolehkan berekstensi jpg, jpeg'
            ]);
            $fileName = time().'.'.$request->thumbnail->extension();
            $request->thumbnail->move(public_path('gambar'), $fileName);

            $data_thumbnail = admin::where('id_wisata', $id)->first();
            File::delete(public_path('gambar').'/'.$data_thumbnail->thumbnail);

            
            $data['thumbnail'] = $fileName;
        }


        admin::where('id_wisata', $id)->update($data);
        return redirect('/admin')->with('success', 'Berhasil melakukan update data.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = admin::where('id_wisata', $id)->first();
        File::delete(public_path('gambar').'/'.$data->thumbnail);
        admin::where('id_wisata', $id)->delete();
        return redirect('/admin')->with('success', 'Berhasil hapus data.');
    }
}