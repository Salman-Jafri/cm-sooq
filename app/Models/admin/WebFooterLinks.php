<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebFooterLinks extends Model
{
    use HasFactory;
    protected $table = 'ac_web_footer_links';
    protected $primaryKey = 'uid';
}
