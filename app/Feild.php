<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Table;

class Field extends Model
{
    protected $table = 'feildslist';
    public function tables()
    {
        return $this->belongsTo(Table::class);
    }

    use HasFactory;
}
