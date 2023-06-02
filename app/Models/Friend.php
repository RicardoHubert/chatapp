<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $table = 'friends';
    protected $fillable = [
        'pengguna_id',
        'teman_id'
    ];

    // Relasi Many-to-Many dengan Pengguna sebagai teman
    public function pengguna()
    {
        return $this->belongsToMany(User::class, 'friends', 'teman_id', 'pengguna_id');
    }
}
