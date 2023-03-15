<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsFiles extends Model
{
    use HasFactory;
    protected $table = 'ac_car_files';
    protected $primaryKey = 'uid';
}
