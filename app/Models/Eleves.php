<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleves extends Model
{
    protected $table = 'eleves';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'age', 'etat'];
}
