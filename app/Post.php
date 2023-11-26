<?php

namespace App;
use App\Models\review;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [ 'nik_user', 'namaKos', 'desc','region','jarakKampus' , 'jenisKos', 'jumLantai', 'jumKamar', 'jumKamarMandi', 'address', 'jalurTransport', 'fasilitas_kamar', 'fasilitas_sekitar', 'maps', 'harga', 'picture', 'published_at' ];
    
    public function pemilik()
    {
        return $this->belongsTo(User::class, 'nik_user', 'nik');
    }

    public function review()
    {
        return $this->hasMany(review::class, 'id_kos', 'id');
    }

}
