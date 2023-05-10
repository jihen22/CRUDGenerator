<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'tableslist';
    protected $fillable = ['name'];
}

    //public function columns()
   // {
      //  return $this->hasMany(TableColumn::class, 'table_id');
   // }

