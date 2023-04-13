<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Country extends Authenticatable
{
    use  HasFactory, Notifiable;

    protected $table='countries';
    protected $primaryKey = 'id';

}
