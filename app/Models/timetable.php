<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class timetable extends Model
{
    protected $table = 'timetable';

    protected $fillable = [
        'group',
        'grafik',
    ];


}
