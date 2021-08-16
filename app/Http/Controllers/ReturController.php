<?php

namespace App\Http\Controllers;

use App\Models\ReturMitra;
use Illuminate\Http\Request;

class ReturController extends Controller
{
    public function ho_retur()
    {
        $returs = ReturMitra::get();

        return view('ho.mitra.retur.data', compact('returs'));
    }

    public function ho_retur_det($id)
    {
        $re = ReturMitra::findOrFail($id);

        return view('ho.mitra.retur.detail', compact('re'));
    }
}
