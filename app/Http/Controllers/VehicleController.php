<?php

namespace App\Http\Controllers;

use App\User;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{


    //get all vehicles
    public function getAllVehicles()
    {
       $vehicles = Vehicle::orderBy('name', 'desc')->get();
       return response()->json([
         'vehicles' => $vehicles
       ]);
       
    }

    //get current user vehicles
    public function getCurrentUserVehicles()
    {
        $currentUser = User::find(Auth::user()->id)->vehicles()->get();
        $list = response()->json(['results'=>$currentUser ]);
        return $list;
    }
}
