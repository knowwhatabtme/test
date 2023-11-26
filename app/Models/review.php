<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    protected $fillable = ['nik_user', 'id_kos', 'pesan'];
    
    public function pereview()
    {
        return $this->belongsTo(User::class, 'nik_user', 'nik');
    }

    public function posts()
    {
        return $this->belongsTo(PostManage::class, 'id_kos', 'id');
    }

}
