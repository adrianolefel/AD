<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user',
        'status',
        'site',
        'manufacturers',
        'model',
        'ram',
        'storage',
        'processor',
        'computer_sn',
        'operating_s'


    
    ];
}
