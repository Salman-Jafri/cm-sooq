<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebCarVisits extends Model
{
    use HasFactory;
    protected $table = 'ac_web_car_visits';
    protected $primaryKey = 'uid';
}
