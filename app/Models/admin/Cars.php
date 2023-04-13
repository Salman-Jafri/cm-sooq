<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\CarsMake;
use App\Models\admin\CarsModel;
use App\Models\admin\CarsTransmission;
use App\Models\admin\CarsFuelType;
use App\Models\admin\CarsDriveLine;
use App\Models\admin\CarsCylinders;
use App\Models\admin\CarsKeys;
use App\Models\admin\CarsInteriorColor;
use App\Models\admin\CarsExteriorColor;
use App\Models\admin\CarsOptions;
use App\Models\admin\CarsOdometer;
use App\Models\admin\CarsFiles;

use App\Models\Member;

class Cars extends Model
{
    use HasFactory;
    protected $table = 'ac_cars';
    protected $primaryKey = 'uid';

    public function carsMake()
    {
        return $this->belongsTo(CarsMake::class,"make_id","uid");
    }

    public function carsModel()
    {
        return $this->belongsTo(CarsModel::class,"model_id","uid");
    }

    public function carsTransmission()
    {
        return $this->belongsTo(CarsTransmission::class,"transmission","uid");
    }

    public function carsFuelType()
    {
        return $this->belongsTo(CarsFuelType::class,"fuel_type","uid");
    }

    public function carsDriveLine()
    {
        return $this->belongsTo(CarsDriveLine::class,"drive_line","uid");
    }

    public function carsMember()
    {
        return $this->belongsTo(Member::class,"member_id","uid");
    }

    public function carsCylinder()
    {
        return $this->belongsTo(CarsCylinders::class,"cylinders","uid");
    }

    public function carsKeys()
    {
        return $this->belongsTo(CarsKeys::class,"ckeys","uid");
    }

    public function carsInterior()
    {
        return $this->belongsTo(CarsInteriorColor::class,"interior_color","uid");
    }

    public function carsExterior()
    {
        return $this->belongsTo(CarsExteriorColor::class,"exterior_color","uid");
    }

    public function carsOptions()
    {
        return $this->belongsTo(CarsOptions::class,"options","uid");
    }

    public function carsOdometer()
    {
        return $this->belongsTo(CarsOdometer::class,"odometer","uid");
    }

    public function carsFiles()
    {
        return $this->hasMany(CarsFiles::class,"car_id","uid");
    }
}
