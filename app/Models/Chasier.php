<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chasier extends Model
{
    use HasFactory;

    protected $table = 'chasiers';
    protected $fillable = ['name', 'phone', 'age'];
}
