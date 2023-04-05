<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Table;

class Field extends Model
{
    protected $table = 'fieldslist4';
    protected $fillable = [
        'table_id','field_type', 'database_column_name', 'validation' ,'visual_title', 'in_list', 'in_create' , 'in_edit' , 'in_show','max','min','default_value'

    ];
    public function tables()
    {

        return $this->belongsTo(Table::class);
    }

    use HasFactory;
}
