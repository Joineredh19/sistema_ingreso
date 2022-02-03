<?php

namespace App\Http\Controllers;

use App\Models\personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Personal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Personals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$personal = request()->all();
        $datosPersonal = request()->except('_token');

        if($request ->hasFile('files')){
            $datosPersonal ['foto']=$request->file('foto')->store('uploads','public');
        }

        Personal::insert($datosPersonal);
        return response()->json($datosPersonal);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(personal $personal)
    {
        //
    }
}
