<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employé extends Model
{
    protected $table = 'employé';
    protected $fillable = ['custmer_id', 'employe_name'];
}