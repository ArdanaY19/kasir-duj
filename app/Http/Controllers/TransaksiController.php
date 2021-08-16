<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Stok;
use App\Models\TransMitra;
use App\Models\TransTamu;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class TransaksiController extends Controller
{
    public function ad_trmitra()
    {
        $transaksis = TransMitra::get();

        return view('admin.transaksi.index', compact('transaksis'));
    }

    public function ad_trmitra_det($id)
    {
        $t = TransMitra::findOrFail($id);

        return view('admin.transaksi.show', compact('t'));
    }

    public function ad_trmitra_cetak()
    {
    	$transaksi = TransMitra::all();

    	$pdf = PDF::loadview('admin.transaksi.cetak_pdf',['transaksi'=>$transaksi]);
    	return $pdf->download('struk_pdf');
    }

    public function ad_cetak($id)
    {
        $t = TransMitra::findOrFail($id);

        return view('admin.transaksi.cetak', compact('t'));
    }

    public function ho_trmitra()
    {
        $transaksis = TransMitra::get();

        return view('ho.tr_mitra.index', compact('transaksis'));
    }

    public function ho_trmitra_det($id)
    {
        $t = TransMitra::findOrFail($id);

        return view('ho.tr_mitra.show', compact('t'));
    }

    public function ho_trmitra_c()
    {
        return view('ho.tr_mitra.create');
    }

    public function ho_trmitra_s(Request $request)
    {
        // $this->validate($request, [
        //     'produk' => ['required'],
        //     'harga_grosir' => ['required'],
        //     'harga_retail' => ['required'],
        //     'center' => ['required'],
        //     'stok' => ['required'],
        // ]);

        // $data = new TransMitra;
        // $data->produk = $request->produk;
        // $data->harga_grosir = $request->harga_grosir;
        // $data->harga_retail = $request->harga_retail;
        // $data->center = $request->center;
        // $data->stok = $request->stok;
        // $data->save();

        return redirect('ho_trmitra');
    }

    public function ho_trmitra_cetak()
    {
    	$transaksi = TransMitra::all();

    	$pdf = PDF::loadview('ho.tr_mitra.cetak_pdf',['transaksi'=>$transaksi]);
    	return $pdf->download('struk_pdf');
    }

    public function ho_trtamu()
    {
        $transaksis = TransTamu::get();

        return view('ho.tr_tamu.index', compact('transaksis'));
    }

    public function ho_trtamu_det($id)
    {
        $t = Transtamu::findOrFail($id);

        return view('ho.tr_tamu.show', compact('t'));
    }

    public function ad_trtamu()
    {
        $transaksis = TransTamu::get();

        return view('admin.tamu.datatransaksitamu', compact('transaksis'));
    }

    public function ad_trtamu_det($id)
    {
        $t = Transtamu::findOrFail($id);

        return view('admin.tamu.detaildatatrstamu', compact('t'));
    }

    public function ad_cetak_tab()
    {
    	$tabungan = TransTamu::all();

    	$pdf = PDF::loadview('admin.tamu.cetak_tab',['tabungan'=>$tabungan]);
    	return $pdf->download('struk');
    }

    public function kc_trtamu()
    {
        $transaksis = TransTamu::get();

        return view('kc.trans_tamu.index', compact('transaksis'));
    }

    public function kc_trtamu_det($id)
    {
        $t = Transtamu::findOrFail($id);

        return view('kc.trans_tamu.show', compact('t'));
    }
}
