<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdViews extends Model
{
    use HasFactory;
    protected $table = 'ac_ad_views';
    protected $primaryKey = 'uid';
}
