<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';
    protected $fillable = [
        'nama_group',
        'deskripsi',
        'gambar'
    ];

    // Relasi Many-to-Many dengan Pengguna sebagai anggota grup
    public function anggota()
    {
        return $this->belongsToMany(User::class, 'group_members', 'group_id', 'pengguna_id');
    }
}
