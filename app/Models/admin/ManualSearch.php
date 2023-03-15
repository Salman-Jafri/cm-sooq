<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManualSearch extends Model
{
    use HasFactory;
    protected $table = 'ac_manual_search';
    protected $primaryKey = 'uid';
}
