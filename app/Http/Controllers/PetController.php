<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Survey;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        return view('pet', compact('pets'));
    }

    public function store($id)
    {
        Session::put('pet_id', $id);

        $food_id = Session::get('food_id');
        $pet_id = Session::get('pet_id');
        $user_ip = Request::ip();
        $user = Survey::where('user', $user_ip)->first();
//        dd($user);
        if (!$user) {
            Survey::create([
                'food_id' => $food_id,
                'pet_id' => $pet_id,
                'user' => $user_ip
            ]);
        } else {
            Survey::where('user', $user_ip)
                ->update(['food_id' => $food_id, 'pet_id' => $pet_id]);
        }

        return redirect()->route('survey.index');
    }
}
