<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\GameCOntroller;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = [
        'name',
        'price',
    ];
}
