<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSliderImagesMobile extends Model
{
    use HasFactory;
    protected $table = 'ac_web_slider_images_mobile';
    protected $primaryKey = 'uid';
}
