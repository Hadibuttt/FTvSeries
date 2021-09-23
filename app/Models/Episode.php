<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $table='episode';
    protected $primaryKey = 'id';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
