<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesans';
    protected $fillable = [
        'pengirim_id',
        'penerima_id',
        'kontent',
        'waktu_pengiriman'
    ];

    // Relasi Many-to-One dengan Pengguna sebagai pengirim pesan
    public function pengirim()
    {
        return $this->belongsTo(User::class, 'pengirim_id');
    }

    // Relasi Many-to-One dengan Pengguna sebagai penerima pesan
    public function penerima()
    {
        return $this->belongsTo(User::class, 'penerima_id');
    }

    // Relasi Many-to-One dengan Grup sebagai grup penerima pesan
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
