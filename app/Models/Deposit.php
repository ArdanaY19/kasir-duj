<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $table = 'deposits';
    protected $guarded = ['id'];

    public function transmitra()
    {
        return $this->belongsTo('App\Models\TransMitra','trans_mitra_id','id');
    }
}
