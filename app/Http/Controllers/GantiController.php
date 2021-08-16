<?php

namespace App\Http\Controllers;

use App\Models\GantiProduk;
use App\Models\Stok;
use App\Models\Tamu;
use Illuminate\Http\Request;

class GantiController extends Controller
{
    public function ho_produk()
    {
        $produks = GantiProduk::get();

        return view('ho.tamu.produk.data', compact('produks'));
    }

    public function ho_produk_det($id)
    {
        $p = GantiProduk::findOrFail($id);

        return view('ho.tamu.produk.detail', compact('p'));
    }

    public function ho_produk_c()
    {
        return view('ho.tamu.produk.tambah');
    }

    public function ho_produk_s(Request $request)
    {
        // $this->validate($request, [
        //     'produk' => ['required'],
        //     'harga_grosir' => ['required'],
        //     'harga_retail' => ['required'],
        //     'center' => ['required'],
        //     'stok' => ['required'],
        // ]);

        // $data = new GantiProduk;
        // $data->produk = $request->produk;
        // $data->harga_grosir = $request->harga_grosir;
        // $data->harga_retail = $request->harga_retail;
        // $data->center = $request->center;
        // $data->stok = $request->stok;
        // $data->save();

        return redirect('ho_produk');
    }

    public function ho_produk_e($id)
    {
        $produk = GantiProduk::find($id);

        return view('ho.tamu.produk.edit', compact('produk'));
    }

    public function ho_produk_u(Request $request, $id)
    {
        $data = GantiProduk::find($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->save();

        return redirect('ho_produk');
    }
}
