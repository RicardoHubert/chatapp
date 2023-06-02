<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notifikasis';
    protected $fillable = [
        'penerima_id',
        'jenis_notifikasi',
        'isi_notifikasi',
        'waktu_pengiriman'
    ];

    // Relasi Many-to-One dengan Pengguna sebagai penerima notifikasi
    public function penerima()
    {
        return $this->belongsTo(User::class, 'penerima_id');
    }
}
