<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSliderImages extends Model
{
    use HasFactory;
    protected $table = 'ac_web_slider_images';
    protected $primaryKey = 'uid';
}
