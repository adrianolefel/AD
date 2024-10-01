<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkEquipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'serial_number', 'model', 'manufacturer', 'ip_address', 'mac_address', 'site', 'status', 'description'
    ];
}