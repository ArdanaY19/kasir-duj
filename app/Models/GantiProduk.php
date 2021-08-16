<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GantiProduk extends Model
{
    use HasFactory;
    protected $table = 'ganti_produks';
    protected $guarded = ['id'];

    public function stok()
    {
        return $this->belongsTo('App\Models\Stok','stok_id','id');
    }

    public function tamu()
    {
        return $this->belongsTo('App\Models\Tamu','tamu_id','id');
    }
}
