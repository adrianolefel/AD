<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\NetworkEquipment;
use Illuminate\Http\Request;

class AssetOverviewController extends Controller
{
    public function index()
    {
        $computerCount = Computer::count();
        $networkEquipmentCount = NetworkEquipment::count();

        return view('asset-overview', compact('computerCount', 'networkEquipmentCount'));
    }
}