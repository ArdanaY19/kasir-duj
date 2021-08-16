<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'mitras';
    protected $guarded = ['id'];

    public function transmitra()
    {
        return $this->hasMany('App\Models\TransMitra','mitra_id','id');
    }

    public function returmitra()
    {
        return $this->hasMany('App\Models\ReturMitra','mitra_id','id');
    }
}
