<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
        public function create(){
            $cars = DB::table('cars')->get();
            return view('create', compact('cars'));
        }

        public function store(Request $request){
            $validated = $request->validate([
                'name' => 'required|max:15',
                'days' => 'required',
                'number' => 'required',
                'car' => 'required',
            ]);

            DB::table('orders')->insert([
                ['name' => $request->input('name'), 'days' => $request->input('days'), 'number' => $request->input('number'), 'car' => $request->input('car')]
            ]);
            return view('home');
            
        }
}

