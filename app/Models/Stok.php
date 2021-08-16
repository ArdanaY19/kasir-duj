<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;
    protected $table = 'stoks';
    protected $guarded = ['id'];

    public function transtamu()
    {
        return $this->hasMany('App\Models\TransTamu','stok_id','id');
    }

    public function refundtamu()
    {
        return $this->hasMany('App\Models\RefundTamu','stok_id','id');
    }

    public function gantiproduk()
    {
        return $this->hasMany('App\Models\GantiProduk','stok_id','id');
    }

    public function transmitra()
    {
        return $this->hasMany('App\Models\TransMitra','stok_id','id');
    }
}
