<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitors extends Model
{
    use HasFactory;

    protected $table = 'visitors';
    protected $guarded = false;
}
