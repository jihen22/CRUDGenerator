<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employé extends Model
{
    protected $table = 'employés';
    protected $fillable = ['nom'];
}