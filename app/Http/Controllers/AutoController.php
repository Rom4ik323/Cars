<?php

namespace App\Http\Controllers;

use App\Auto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto = Auto::all();
        return view('adminpanel_auto', compact('auto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('cars')->insert([
            ['name' => $request->input('name'), 'cost' => $request->input('cost'), 'img' => $request->input('img'), 'hs' => $request->input('hs'),
             'liters' => $request->input('liters'), 'fuel' => $request->input('fuel'), 'drive' => $request->input('drive')]
        ]);
        return view('success');
    }

    public function storeAuto(Request $request)
    {
        return view('store_auto');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $auto = Auto::find($id);
        $auto->name=$request->name;
        $auto->cost=$request->cost;
        $auto->img=$request->img;
        $auto->hs=$request->hs;
        $auto->liters=$request->liters;
        $auto->fuel=$request->fuel;
        $auto->drive=$request->drive;
        $auto->save();
        return redirect('/adminpanel/auto');
    }

    public function editAuto($id)
    {
        $auto = Auto::find($id);
        return view('edit_auto', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auto $auto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $auto)
    {
        $auto->delete();
        return back();
    }
}
