<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function ad_stok()
    {
        $stoks = Stok::all();

        return view('admin.datastokbarang', compact('stoks'));
    }

    public function ho_stok()
    {
        $stoks = Stok::all();

        return view('ho.barang.data', compact('stoks'));
    }

    public function ho_stok_c()
    {
        return view('ho.barang.tambah');
    }

    public function ho_stok_s(Request $request)
    {
        $this->validate($request, [
            'produk' => ['required'],
            'harga_grosir' => ['required'],
            'harga_retail' => ['required'],
            'center' => ['required'],
            'stok' => ['required'],
        ]);

        $data = new Stok;
        $data->produk = $request->produk;
        $data->harga_grosir = $request->harga_grosir;
        $data->harga_retail = $request->harga_retail;
        $data->center = $request->center;
        $data->stok = $request->stok;
        $data->save();

        return redirect('ho_stok');
    }

    public function ho_stok_e($id)
    {
        $stok = Stok::find($id);

        return view('ho.barang.edit', compact('stok'));
    }


    public function ho_stok_u(Request $request, $id)
    {
        $this->validate($request, [
            'produk' => ['required'],
            'harga_grosir' => ['required'],
            'harga_retail' => ['required'],
            'center' => ['required'],
            'stok' => ['required'],
        ]);

        $data = Stok::find($id);
        $data->produk = $request->produk;
        $data->harga_grosir = $request->harga_grosir;
        $data->harga_retail = $request->harga_retail;
        $data->center = $request->center;
        $data->stok = $request->stok;
        $data->save();

        return redirect('ho_stok');
    }

    public function kc_stok()
    {
        $stoks = Stok::get();

        return view('kc.barang.data', compact('stoks'));
    }

    public function kc_stok_det($id)
    {
        $s = Stok::findOrFail($id);

        return view('kc.barang.detail', compact('s'));
    }
}
