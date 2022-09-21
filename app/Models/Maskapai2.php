<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maskapai2 extends Model
{
    use HasFactory;

    protected $table = 'maskapai_2';
    protected $fillable = ['nama_maskapai'];
}
