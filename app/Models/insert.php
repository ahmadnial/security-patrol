<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insert extends Model
{
    use HasFactory;

    protected $table = 'timeline_checkins';
    protected $fillable = ['nm_petugas', 'lokasi', 'tanggal', 'jam'];
}
