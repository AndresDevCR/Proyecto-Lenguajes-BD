<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class usedCarContoller extends Controller
{
    public function usedCar()
    {   $autos = Auto::all();
        $autos = Auto::paginate(27);
        return view('page.usedCar', compact('autos'));
    }

    public function usedCarDetail()
    {
        return view('page.usedCarDetail');
    }

}
