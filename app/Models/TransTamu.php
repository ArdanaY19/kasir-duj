<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransTamu extends Model
{
    use HasFactory;
    protected $table = 'trans_tamus';
    protected $guarded = ['id'];

    public function stok()
    {
        return $this->belongsTo('App\Models\Stok','stok_id','id');
    }

    public function tamu()
    {
        return $this->belongsTo('App\Models\Tamu','tamu_id','id');
    }

    public function transtamu()
    {
        return $this->hasMany('App\Models\TransTamu','trans_tamu_id','id');
    }
}
