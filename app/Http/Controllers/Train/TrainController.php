<?php

namespace App\Http\Controllers\Train;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function today() {
        $nowDate = Carbon::today();
        $todayTrains = Train::where('departure_date', $nowDate)->get();
        return view('today_trains',compact('todayTrains'));
    }
}
