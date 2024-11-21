<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boba;

class BobaController extends Controller
{
    function index()
    {
        $bobas = Boba::all();
        return view('bobas.index',['bobas' => $bobas]);
    }

    function create()
    {
        return view('bobas.create');
    }

    function about()
    {
        return view('bobas.about');
    }

    function store(Request $request)
    {
        $boba = new Boba();
        $boba->name = $request->name;
        $boba->liquid = $request->liquid;
        $boba->cupSize = $request->cupSize;
        $boba->temperature = $request->temperature;
        $boba->topping = $request->topping;
        $boba->sugarLevel = $request->sugarLevel;
        $boba->iceLevel = $request->iceLevel;
        $boba->save();
        return redirect('/bobas');
    }

    function show($id)
    {
        $boba = Boba::find($id);
        return view('bobas.show', ['boba' => $boba]);
    }

    function edit($id)
    {
        $boba = Boba::find($id);
        return view('bobas.edit', ['boba' => $boba]);
    }

    function update(Request $request)
    {
        $id = $request->id;
        $boba = Boba::find($id);
        $boba->name = $request->name;
        $boba->liquid = $request->liquid;
        $boba->cupSize = $request->cupSize;
        $boba->temperature = $request->temperature;
        $boba->topping = $request->topping;
        $boba->sugarLevel = $request->sugarLevel;
        $boba->iceLevel = $request->iceLevel;
        $boba->save();
        return redirect('/bobas');
    }

    function destroy(Request $request)
    {
        $id = $request->id;
        $boba = Boba::find($id);
        $boba->delete();
        return redirect('/bobas');
    }
}
