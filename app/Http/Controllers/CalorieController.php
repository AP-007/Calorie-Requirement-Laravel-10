<?php

namespace App\Http\Controllers;

use App\Models\Calorie;
use Illuminate\Http\Request;

class CalorieController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|max:255",
            "email" => "nullable",
            "weight" => "required|numeric",
            "height" => "required|numeric",
            "age" => "required|numeric|min:0|max:100",
            "gender" => "required|max:255",
            "activity-level" => "required|max:255",
            "goal" => "required|max:255",
        ]);

        if($data['gender']=='male'){
            $daily_calorie = 88.362 + (13.397 * $data['weight']) + (4.799 * $data['height']) - (5.677 * $data['age']);
        }else{
            $daily_calorie =  447.593 + (9.247 * $data['weight']) + (3.098 * $data['height']) - (4.330 * $data['age']);
        }
        
        Calorie::create([
            "name"=>$data["name"],
            "email"=>$data["email"],
            "weight"=>$data["weight"],
            "height"=>$data["height"],
            "age"=>$data["age"],
            "gender"=>$data["gender"],
            "activity-level"=>$data["activity-level"],
            "goal"=>$data["goal"],
            "daily_calorie"=>$daily_calorie
        ]);

        $name = $data["name"];
        return view('output',compact('daily_calorie','name'));
    }

    public function index()
    {
        return view('calorie');
    }

}
