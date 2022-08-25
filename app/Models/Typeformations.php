<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeformations extends Model
{
    protected $table = 'typeformations';
    protected $primaryKey = 'id';
    protected $fillable = ['nom'];
}
