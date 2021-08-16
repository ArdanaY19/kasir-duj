<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransMitra extends Model
{
    use HasFactory;
    protected $table = 'trans_mitras';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function mitra()
    {
        return $this->belongsTo('App\Models\Mitra','mitra_id','id');
    }

    public function stok()
    {
        return $this->belongsTo('App\Models\Stok','stok_id','id');
    }

    public function transmitra()
    {
        return $this->hasMany('App\Models\TransMitra','trans_mitra_id','id');
    }
}


