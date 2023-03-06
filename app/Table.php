<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD:app/Models/Table.php
use App\Models\field;

=======
use App\Feild;
>>>>>>> cf94643b5ce4d25f2fb1bafa5122d68e7453e51e:app/Table.php

class Table extends Model
{
    protected $table = 'tableslist';
    public function fields()
    {
        return $this->hasMany(Field::class);
    }
    use HasFactory;
}
