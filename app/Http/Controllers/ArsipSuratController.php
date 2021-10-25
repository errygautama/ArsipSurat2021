<?php

namespace App\Http\Controllers;

use App\Models\ArsipSurat;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Webpatser\Uuid\Uuid;

class ArsipSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $surats = ArsipSurat::get();
        return view ('arsip-surat.index', compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('arsip-surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $arsip = new ArsipSurat();
        $request->validate([
            'nomor_surat' => 'required',               
            'kategori' => 'required',               
            'judul' => 'required',               
            'file_surat' => 'required|mimes:pdf'             
        ]);        
        $arsip->nomor_surat = $request->nomor_surat;
        $arsip->kategori = $request->kategori;
        $arsip->judul = $request->judul;
        $arsip->file_surat = $request->file('file_surat')->store('file-surat', 'public');
        $arsip->save();

        return redirect()->route('arsip-surat.index')->with(['data' => 'Arsip Surat Berhasil Ditambahkan', 'alert' => 'alert-primary']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArsipSurat  $arsipSurat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $surats = ArsipSurat::where("id", "=", $id)->first();
        return view('arsip-surat.show', compact('surats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArsipSurat  $arsipSurat
     * @return \Illuminate\Http\Response
     */
    public function edit(ArsipSurat $arsipSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArsipSurat  $arsipSurat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArsipSurat $arsipSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArsipSurat  $arsipSurat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArsipSurat $arsipSurat)
    {

        unlink(storage_path('app/public/'.$arsipSurat->file_surat));

        $arsipSurat->delete();
        return redirect()->route('arsip-surat.index')-> with(['data' => 'Arsip Surat Berhasil Dihapus', 'alert' => 'alert-danger']);
    }

    public function download($id) {


        $arsipSurat = ArsipSurat::where('id',$id)->first();
        return response()->download(storage_path('app/public/'.$arsipSurat->file_surat));
        
    	
    }
}
