<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index(){

        $tamus = \App\Models\Tamu::paginate(20);

        return view('landingpage.index', compact('tamus'));

    }
    public function get(){

        $data = \App\Models\Landingpage::first();

        return response()->json($data);
    }

    public function update(Request $request){

        $data = \App\Models\Landingpage::first();
        $data->update($request->all());

        return response()->json($data, 200);

    }
}
