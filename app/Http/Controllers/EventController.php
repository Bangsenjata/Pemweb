<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function __construct()
    {
        // Assign to all EXCEPT specific methods in this Controller
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $events = event::all();
        return view('event.event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'evd' => 'required|date_format:Y-m-d',
            'lokasi'=> 'required',
            'loc' => 'required|active_url',
            'price' => 'required',
            'pembicara' => 'required',
            'instansi' => 'required',
            'topik' => 'required',
            'regsd' => 'required|date_format:Y-m-d',
            'reged' =>'required|date_format:Y-m-d',
            'ct'=>'required|image',
            'pst'=>'required|image',
            'csd' =>'required|date_format:Y-m-d',
            'category' =>'required',
        ],[
            'name.required' => 'Harap isi Nama Event',
            'evd.date_format' => 'Harap masukkan format tanggal yang sesuai YYYY-MM-DD',
            'evd.required' => 'Harap isi Event Date',
            'lokasi.required' => 'Harap isi Lokasi',
            'loc.required' => 'Harap isi Event Link',
            'loc.active_url' => 'Harap isi Event Link dengan URL Lokasi Google Map atau URL Zoom Meeting',
            'price.required' => 'Harap isi Harga Tiket Masuk',
            'pembicara.required' => 'Harap isi Nama Pembicara',
            'instansi.required' => 'Harap isi Asal Instansi Pembicara',
            'topik.required' => 'Hara isi topik dari pembicara',
            'regsd.date_format' => 'Harap masukkan format tanggal yang sesuai YYYY-MM-DD',
            'regsd.required' => 'Harap isi Registration Start Date',
            'reged.date_format' =>'Harap masukkan format tanggal yang sesuai YYYY-MM-DD',
            'reged.required' =>'Harap isi Registration End Date',
            'ct.required'=>'Harap Upload Template Certificate',
            'ct.image'=>'Harap Upload Template Certificate dalam Format Gambar',
            'pst.required'=>'Harap Upload Poster',
            'pst.image'=>'Harap Upload Poster dalam Format Gambar',
            'csd.date_format' =>'Harap masukkan format tanggal yang sesuai YYYY-MM-DD',
            'csd.required' =>'Harap isi Certificate Start Date',
            'category.required' =>'Harap isi kategori event',
            ]);

        $data = [
            'nama'=>$request->name,
            'tanggal'=>$request->evd,
            'link'=>$request->loc,
            'lokasi'=>$request->lokasi,
            'harga'=>$request->price,
            'isPaid'=>$request->pait,
            'pembicara'=>$request->pembicara,
            'instansi'=>$request->instansi,
            'topik'=>$request->topik->store('topik'),
            'regawal'=>$request->regsd,
            'regakhir'=>$request->reged,
            'sertifikat'=>$request->ct->store('certificate_template'),
            'poster'=>$request->pst->store('poster'),
            'tanggalsertif'=>$request->csd,
            'kategoriEvent'=>$request->category,
        ];

        event::create($data);
        return redirect()->to('event');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = event::where('id',$id)->first();
        return view('event.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = event::where('id',$id)->first();
        return view('event.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'evd' => 'required|date_format:Y-m-d',
            'lokasi'=> 'required',
            'loc' => 'required|active_url',
            'price' => 'required',
            'pembicara' => 'required',
            'instansi' => 'required',
            'topik' => 'required',
            'regsd' => 'required|date_format:Y-m-d',
            'reged' =>'required|date_format:Y-m-d',
            'ct'=>'required|image',
            'pst'=>'required|image',
            'csd' =>'required|date_format:Y-m-d',
            'category' =>'required',
        ],[
            'name.required' => 'Harap isi Nama Event',
            'evd.date_format' => 'Harap masukkan format tanggal yang sesuai YYYY-MM-DD',
            'evd.required' => 'Harap isi Event Date',
            'lokasi.required' => 'Harap isi Lokasi',
            'loc.required' => 'Harap isi Event Link',
            'loc.active_url' => 'Harap isi Event Link dengan URL Lokasi Google Map atau URL Zoom Meeting',
            'price.required' => 'Harap isi Harga Tiket Masuk',
            'pembicara.required' => 'Harap isi Nama Pembicara',
            'instansi.required' => 'Harap isi Asal Instansi Pembicara',
            'topik.required' => 'Hara isi topik dari pembicara',
            'regsd.date_format' => 'Harap masukkan format tanggal yang sesuai YYYY-MM-DD',
            'regsd.required' => 'Harap isi Registration Start Date',
            'reged.date_format' =>'Harap masukkan format tanggal yang sesuai YYYY-MM-DD',
            'reged.required' =>'Harap isi Registration End Date',
            'ct.required'=>'Harap Upload Template Certificate',
            'ct.image'=>'Harap Upload Template Certificate dalam Format Gambar',
            'pst.required'=>'Harap Upload Poster',
            'pst.image'=>'Harap Upload Poster dalam Format Gambar',
            'csd.date_format' =>'Harap masukkan format tanggal yang sesuai YYYY-MM-DD',
            'csd.required' =>'Harap isi Certificate Start Date',
            'category.required' =>'Harap isi kategori event',
            ]);

        $data = [
            'nama'=>$request->name,
            'tanggal'=>$request->evd,
            'link'=>$request->loc,
            'lokasi'=>$request->lokasi,
            'harga'=>$request->price,
            'isPaid'=>$request->pait,
            'pembicara'=>$request->pembicara,
            'instansi'=>$request->instansi,
            'topik'=>$request->topik->store('topik'),
            'regawal'=>$request->regsd,
            'regakhir'=>$request->reged,
            'sertifikat'=>$request->ct->store('certificate_template'),
            'poster'=>$request->pst->store('poster'),
            'tanggalsertif'=>$request->csd,
            'kategoriEvent'=>$request->category,
        ];

        event::where('id',$id)->update($data);
        return redirect()->to('/event');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        event::where('id',$id)->delete();
        return redirect()->to('/event');
    }
}
