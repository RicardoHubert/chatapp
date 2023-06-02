<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relasi One-to-Many dengan Pesan yang dikirim oleh pengguna
    public function pesanDikirim()
    {
        return $this->hasMany(Message::class, 'pengirim_id');
    }

    // Relasi One-to-Many dengan Pesan yang diterima oleh pengguna
    public function pesanDiterima()
    {
        return $this->hasMany(Message::class, 'penerima_id');
    }

    // Relasi Many-to-Many dengan Grup sebagai anggota grup
    public function group()
    {
        return $this->belongsToMany(Group::class, 'group_members', 'pengguna_id', 'grup_id');
    }

    // Relasi Many-to-Many dengan dirinya sendiri sebagai teman
    public function teman()
    {
        return $this->belongsToMany(User::class, 'friends', 'pengguna_id', 'teman_id');
    }

    // Relasi One-to-Many dengan Notifikasi yang diterima oleh pengguna
    public function notifikasi()
    {
        return $this->hasMany(Notification::class, 'penerima_id');
    }
}
