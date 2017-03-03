<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table='tintucs';
    protected $fillable = [
        'tieude', 'motangan', 'noidung','anhtieubieu','path','user_id'
    ];
    protected $primaryKey = 'id';
    public function users(){
        return $this->belongsTo('App\User','id');
    }
}
