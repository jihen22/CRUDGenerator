<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    protected $table = 'etudiant';
    protected $fillable = ['prénom'];
}