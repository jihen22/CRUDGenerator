<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\field;
use App\Feild;


class Table extends Model
{
    use HasFactory;

    protected $table = 'tableslist';

    protected $fillable = [
        'name',
        'model_name',
        'controller_name',
        'view_name'
    ];

    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}




