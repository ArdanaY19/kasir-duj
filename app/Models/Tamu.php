<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $table = 'tamus';
    protected $guarded = ['id'];

    public function transtamu()
    {
        return $this->hasMany('App\Models\TransTamu','tamu_id','id');
    }

    public function refundtamu()
    {
        return $this->hasMany('App\Models\RefundTamu','tamu_id','id');
    }

    public function gantiproduk()
    {
        return $this->hasMany('App\Models\GantiProduk','tamu_id','id');
    }
}
