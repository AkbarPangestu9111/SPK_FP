<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    
    // Tabel Anda hanya memiliki created_at, tidak ada updated_at
    const UPDATED_AT = null; 

    protected $fillable = [
        'nama',
        'email',
        'password_hash',
        'role',
    ];

    protected $hidden = [
        'password_hash',
    ];

    // 1. Untuk membaca password saat login
    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    // 2. TAMBAHKAN INI: Untuk memberi tahu Laravel nama kolom saat update (rehash)
    public function getAuthPasswordName()
    {
        return 'password_hash';
    }
}