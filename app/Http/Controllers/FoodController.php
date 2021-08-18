<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FoodController extends Controller
{
    public function index()
    {
//        Session::flush();
        $foods = Food::all();
        return view('food', compact('foods'));
    }

    public function store($id)
    {
        Session::put('food_id',$id);
        return redirect()->route('pet.index');
    }
}
