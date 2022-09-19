<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketonDuty extends Model
{
    use HasFactory;

    protected $table = 'on_duty';
    protected $fillable = ['name', 'no_hp', 'origin', 'date', 'flight', 'time', 'maskapai', 'date_2', 'flight_2', 'time_2', 'maskapai_2', 'akomodasi', 'status', 'gff', 'bff'];
}
