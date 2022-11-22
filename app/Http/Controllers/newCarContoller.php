<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class newCarContoller extends Controller
{
    public function newCar()
    {   $autos = Auto::all();
        $autos = Auto::paginate(27);
        return view('page.newCar', compact('autos'));
    }

    public function newCarDetail()
    {
        return view('page.newCarDetail');
    }


    public function findByID($id)
    {
        $autos = Auto::find($id);
        return view('page.findByIDNewCar', compact('autos'));
    }

    public function add(Request $request)
    {
        $autos = new Auto();
        $autos->marca = $request->marca;
        $autos->modelo = $request->modelo;
        $autos->color = $request->color;
        $autos->placa = $request->placa;
        $autos->precio = $request->precio;
        $autos->tipo = $request->tipo;
        $autos->estado = $request->estado;
        $autos->imagen = $request->imagen;
        $autos->save();
        return redirect()->route('newCar');
    }

    public function edit($id)
    {
        $autos = Auto::find($id);
        return view('page.editNewCar', compact('autos'));
    }


    public function update(Request $request, $id)
    {
        $autos = Auto::find($id);
        $autos->marca = $request->marca;
        $autos->modelo = $request->modelo;
        $autos->color = $request->color;
        $autos->placa = $request->placa;
        $autos->precio = $request->precio;
        $autos->tipo = $request->tipo;
        $autos->estado = $request->estado;
        $autos->imagen = $request->imagen;
        $autos->save();
        return redirect()->route('newCar');
    }



    public function delete($id)
    {
        $autos = Auto::find($id);
        $autos->delete();
        return redirect()->route('newCar');
    }









}
