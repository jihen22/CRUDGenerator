<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class moha1 extends Model
{
    protected $table = 'moha1';
    protected $fillable = ['colonne5,id,remember_token,created_at,updated_at'];
   
    public static function getTableColumns()
    {
        return Schema::getColumnListing((new static)->getTable());
    }
}