<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappCount extends Model
{
    use HasFactory;
    protected $table = 'ac_whatsapp_count';
    protected $primaryKey = 'uid';
}
