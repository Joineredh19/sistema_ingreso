<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personals;
class PersonalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //++

        $datos['Personas']=Personals::all();
        return view('admin.index',$datos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
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
            $personal = new Personals();

            $personal -> T_identificacion=$request->get('Tdocumento');
            $personal -> N_identificacion=$request->get('Ndocumento');
            $personal -> Nombre=$request->get('Nombre');
            $personal -> Apellido=$request->get('Apellido');
            $personal -> Correo=$request->get('Correo');
            $personal -> Telefono=$request->get('Telefono');
            $personal -> Cargo=$request->get('Cargo');

            $personal->save();

            return redirect('/admin/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
