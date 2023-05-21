<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table08 extends Model
{
    protected $table = 'table08';
    protected $fillable = ['colonne08'];

    public function addColumn($column)
    {
        $fillable = $this->getFillable();
        $fillable[] = $column;
        $this->fillable = $fillable;
        $this->save();
    }

    
}