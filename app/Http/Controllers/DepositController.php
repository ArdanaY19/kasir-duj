<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\TransMitra;
use App\Models\User;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function ho_deposit()
    {
        $deposits = Deposit::get();

        return view('ho.mitra.deposit.data', compact('deposits'));
    }

    public function ho_deposit_det($id)
    {
        $depo = Deposit::findOrFail($id);

        return view('ho.mitra.deposit.detail', compact('depo'));
    }

    public function ho_deposit_c()
    {
        $depo = Deposit::get();

        return view('ho.mitra.deposit.tambah', compact('depo'));
    }

    public function ho_deposit_s(Request $request)
    {

        $data = new Deposit;
        $data->nama = $request->nama;
        $data->tanggal = $request->tanggal;
        $data->nominal = $request->nominal;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('ho_deposit');
    }

    public function ad_deposit()
    {
        $deposits = Deposit::get();

        return view('admin.mitra.deposit.datadeposit', compact('deposits'));
    }

    public function ad_deposit_det($id)
    {
        $depo = Deposit::findOrFail($id);

        return view('admin.mitra.deposit.detaildatadeposit', compact('depo'));
    }
}
