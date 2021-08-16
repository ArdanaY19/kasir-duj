<?php

namespace App\Http\Controllers;

use App\Models\RefundTamu;
use App\Models\Stok;
use App\Models\Tamu;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function ho_refund()
    {
        $refunds = RefundTamu::get();

        return view('ho.tamu.refund.data', compact('refunds'));
    }

    public function ho_refund_det($id)
    {
        $r = RefundTamu::findOrFail($id);

        return view('ho.tamu.refund.detail', compact('r'));
    }

    public function ho_refund_e($id)
    {
        $refund = RefundTamu::find($id);

        return view('ho.tamu.refund.edit', compact('refund'));
    }

    public function ad_refund()
    {
        $refunds = RefundTamu::get();

        return view('admin.tamu.refund.datarefund', compact('refunds'));
    }

    public function ad_refund_det($id)
    {
        $r = RefundTamu::findOrFail($id);

        return view('admin.tamu.refund.detaildatarefund', compact('r'));
    }

    public function kc_refund()
    {
        $refunds = RefundTamu::get();

        return view('kc.refund.data', compact('refunds'));
    }

    public function kc_refund_det($id)
    {
        $r = RefundTamu::findOrFail($id);

        return view('kc.refund.detail', compact('r'));
    }
}
