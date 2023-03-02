<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Table;

class feild extends Model
{
    protected $table = 'feilds_list';
    public function tables()
    {
        return $this->belongsTo(Table::class);
    }

    use HasFactory;
}
