<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class DonorDarahController extends Controller
{

    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_donordarah = \App\Models\DonorDarah::where('nama','LIKE','%'.$request->cari.'%')->get();   
        }else{
            $data_donordarah = \App\Models\DonorDarah::all();
        }
        return view('donordarah.index',['data_donordarah' => $data_donordarah]);
    }

    // public function index()
    // {
    //     $data_donordarah = \App\Models\DonorDarah::all();
    //     return view('donordarah.index',['data_donordarah' => $data_donordarah]);
    // }

    public function create(Request $request)
    {
        \App\Models\DonorDarah::create($request->all());
        return redirect('/donordarah')->with('sukses', 'Data berhasil di input');
    }

    public function edit($id)
    {
        $data_donordarah = \App\Models\DonorDarah::find($id);
        return view('donordarah.edit', ['donordarah' => $data_donordarah]);
    }

    public function update(Request $request, $id)
    {
        $data_donordarah = \App\Models\DonorDarah::find($id);
        $data_donordarah->update($request->all());
        return redirect('/donordarah')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id){
        $data_donordarah = \App\Models\DonorDarah::find($id);
        $data_donordarah->delete();
        return redirect('/donordarah')->with('sukses', 'Data berhasil dihapus');
    }

    
    public function exportPdf()
    {
        $data_donordarah = \App\Models\DonorDarah::all();
        $pdf = PDF::loadView('export.donordarahpdf',['donordarah' => $data_donordarah]);
        return $pdf->download('donordarah.pdf');
    }
}
