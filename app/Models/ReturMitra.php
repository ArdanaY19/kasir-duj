<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturMitra extends Model
{
    use HasFactory;
    protected $table = 'retur_mitras';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function mitra()
    {
        return $this->belongsTo('App\Models\Mitra','mitra_id','id');
    }
}
