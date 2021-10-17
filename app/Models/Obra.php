<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'lancamento',
        'user_id'
    ];

    public function userObras() {
        return $this->hasMany(User::class);
    }
}
