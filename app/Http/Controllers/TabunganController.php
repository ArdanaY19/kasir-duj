<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use App\Models\TabTamu;
use App\Models\Tamu;
use App\Models\TransTamu;
use Illuminate\Http\Request;


class TabunganController extends Controller
{
    public function ho_tabungan()
    {
        $tabungans = TabTamu::get();

        return view('ho.tab_tamu.index', compact('tabungans'));
    }

    public function ho_tabungan_det($id)
    {
        $ta = TabTamu::findOrFail($id);

        return view('ho.tab_tamu.show', compact('ta'));
    }

    public function ad_tabungan()
    {
        $tabungans = TabTamu::get();

        return view('admin.tamu.datatabungantamu', compact('tabungans'));
    }

    public function ad_tabungan_det($id)
    {
        $ta = TabTamu::findOrFail($id);

        return view('admin.tamu.detailtabungantamu', compact('ta'));
    }

    public function kc_tabungan()
    {
        $tabungans = TabTamu::get();

        return view('kc.tab_tamu.index', compact('tabungans'));
    }

    public function kc_tabungan_det($id)
    {
        $ta = TabTamu::findOrFail($id);

        return view('kc.tab_tamu.show', compact('ta'));
    }
}
