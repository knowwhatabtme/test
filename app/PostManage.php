<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostManage extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = [ 'nik_user', 'namaKos', 'desc','region' ,'jarakKampus' , 'jenisKos', 'jumLantai', 'jumKamar', 'jumKamarMandi', 'address', 'jalurTransport', 'fasilitas_kamar', 'fasilitas_sekitar', 'maps', 'harga', 'picture', 'published_at' ];
    // ['title','picture','desc' ,'category_id','pemilik_nik' ,'max_lantai','max_kamarT','max_kamarM','alamat_kost','jalur_transportasi','fasilitas_kamar','fasilitas_sekitar','maps','harga','published_at'];

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'nik_user', 'nik');
    }

    public function review()
    {
        return $this->hasMany(review::class);
    }

}
