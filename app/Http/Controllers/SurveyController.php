<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Pet;
use App\Models\Survey;
use Illuminate\Support\Facades\Session;

class SurveyController extends Controller
{
    public function index()
    {
        $arr = [];
        $pet = Pet::all('name');
        $food = Food::all('name');
        for ($i = 0; $i <= count($pet); $i++) {
            for ($j = 0; $j <= count($food); $j++) {
                if ($i == 0 && $j == 0) {
                    $arr[$i][$j] = '';
                }
                if ($i == 0 && $j != 0) {
                    $arr[$i][$j] = $pet[$j - 1]->name;
                }
                if ($i != 0 && $j == 0) {
                    $arr[$i][$j] = $food[$i - 1]->name;
                }
                if ($i != 0 && $j != 0) {
                    $survey = Survey::where('pet_id', $j)
                        ->where('food_id', $i)
                        ->count();
                    $arr[$i][$j] = $survey;
                }
            }
        }
        $food_id = Session::get('food_id');
        $pet_id = Session::get('pet_id');
        $selectedId = $pet_id.$food_id;
//        dd(Session::get('food_id'),Session::get('pet_id'));
        return view('survey', compact('arr','selectedId'));
    }
}
