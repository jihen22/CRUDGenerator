<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fieldslist4 extends Model
{
    
    use HasFactory;

    protected $table = 'fieldslist4';

    protected $fillable = [
        'table_id' ,
        // ajout de la clé étrangère

        'field_type',
        'database_column_name',
        'validation',
        'visual_title',
        'in_list',
        'in_create',
        'in_show',
        'in_edit',
        'max',
        'min',
        'default_value',
    ];

    public function tableslist()
    {
        return $this->belongsTo(tableslist::class, 'table_id');
    }
}
