<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\field;
use App\Feild;


class Table extends Model
{
    protected $table = 'tableslist';
    protected $fillable = [
        'name',
    ];
    public function fields()
    {
        return $this->hasMany(Field::class);
    }
    use HasFactory;
}
