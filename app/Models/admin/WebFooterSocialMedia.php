<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebFooterSocialMedia extends Model
{
    use HasFactory;
    protected $table = 'ac_web_footer_social_media';
    protected $primaryKey = 'uid';
}
