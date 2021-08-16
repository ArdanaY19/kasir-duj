<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabTamu extends Model
{
    use HasFactory;
    protected $table = 'tab_tamus';
    protected $guarded = ['id'];

    public function transtamu()
    {
        return $this->belongsTo('App\Models\TransTamu','trans_tamu_id','id');
    }
}
