<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'id_level'
    ];

    public function user()
    {
        return $this->hasOne(USer::class, 'id_level');
    }
}
