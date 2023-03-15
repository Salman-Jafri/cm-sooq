<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebLearning extends Model
{
    use HasFactory;
    protected $table = 'ac_web_learning';
    protected $primaryKey = 'uid';
}
