<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
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
