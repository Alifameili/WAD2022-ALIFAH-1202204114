<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\showroom_alifah;

class ShowroomController extends Controller
{
    public function addmobil(Request $request)
    {
        showroom_alifah::create($request->all());
        return redirect('/showroom');
    }
    public function index()
    {
        $car = showroom_alifah::all();
        return view('showroom.showroom', compact(['car']));
    }
}
