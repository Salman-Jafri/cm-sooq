<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaMessages extends Model
{
    use HasFactory;
    protected $table = 'ac_wa_messages';
    protected $primaryKey = 'uid';
}
