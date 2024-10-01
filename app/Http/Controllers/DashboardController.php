<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Models\NetworkEquipment;


class DashboardController extends Controller
{
    public function dashboard()
{
    $computerCount = Computer::count();
    $networkEquipmentCount = NetworkEquipment::count();
    $totalAssets = $computerCount + $networkEquipmentCount;
    return view('dashboard', compact('computerCount', 'networkEquipmentCount', 'totalAssets'));
}
}