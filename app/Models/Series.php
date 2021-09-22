<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;
    protected $table='series';
    protected $primaryKey = 'id';

    public function getRouteKeyName()
    {
        return 'slug';
    }

}