<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketoffDuty extends Model
{
    use HasFactory;

    protected $table = 'off_duty';
    protected $fillable = ['full_name', 'no_hp', 'origin', 'date', 'flight', 'time', 'maskapai', 'date_2', 'flight_2', 'time_2', 'maskapai_2', 'akomodasi', 'status', 'gff', 'bff'];

}
