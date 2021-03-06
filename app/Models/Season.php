<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    protected $table='season';
    protected $primaryKey = 'id';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
