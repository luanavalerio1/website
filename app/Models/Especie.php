<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    protected $fillable = ['nomeEspecie'];
    public function Pets () {
        return $this ->hasMany('App/Models/Pets', 'especie');
    }
}
