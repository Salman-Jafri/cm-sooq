<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsKeys extends Model
{
    use HasFactory;
    protected $table = 'ac_cars_ckeys';
    protected $primaryKey = 'uid';
}
