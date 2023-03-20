<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDefault extends Model
{
    use HasFactory;
    protected $table = 'ac_model_default';
    protected $primaryKey = 'uid';
}
