<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tableslist extends Model
{
    use HasFactory;


    protected $table = 'tableslist';
    protected $fillable = [
        'name'
        
    ];

    public function fieldslist4()
    {
        return $this->hasMany(fieldslist4::class, 'table_id'); // correction de la méthode relationnelle
    }
}