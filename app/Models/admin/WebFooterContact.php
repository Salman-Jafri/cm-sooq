<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebFooterContact extends Model
{
    use HasFactory;
    protected $table = 'ac_web_footer_contact';
    protected $primaryKey = 'uid';
}
