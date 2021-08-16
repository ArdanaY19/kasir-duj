<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function ad_mitra()
    {
        $mitras = Mitra::all();

        return view('admin.mitra.index', compact('mitras'));
    }

    public function ad_mitra_det($id)
    {
        $mitra = Mitra::findOrFail($id);

        return view('admin.mitra.show', compact('mitra'));
    }

    public function ho_mitra()
    {
        $mitras = Mitra::all();

        return view('ho.mitra.index', compact('mitras'));
    }

    public function ho_mitra_c()
    {
        return view('ho.mitra.create');
    }

    public function ho_mitra_s(Request $request)
    {
        $data = new Mitra;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->save();

        return redirect('ho_mitra');
    }

    public function ho_mitra_det($id)
    {
        $mitra = Mitra::findOrFail($id);

        return view('ho.mitra.show', compact('mitra'));
    }

    public function ho_mitra_e($id)
    {
        $mitra = Mitra::find($id);

        return view('ho.mitra.edit', compact('mitra'));
    }

    public function ho_mitra_u(Request $request, $id)
    {
        $data = Mitra::find($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->save();

        return redirect('ho_mitra');
    }
}
