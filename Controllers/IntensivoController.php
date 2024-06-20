<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intensivo;
class IntensivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
//funcao para cadastrar os alunos intensivos 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_pautas_I(Request $request)
    {
        //

        $alunos_I= new Intensivo();

        $alunos_I->nome=$request->nome;
        $alunos_I->valor_pago=$request->valor_pago;
        $alunos_I->sexo=$request->sexo;
        
        $alunos_I->data=$request->data;
        
        $alunos_I->curso=$request->curso;
        $alunos_I->telefone=$request->telefone;

        $alunos_I->turno=$request->turno;
        $alunos_I->categoria=$request->categoria;
   
        $alunos_I->save();
      

       
        return redirect('usuarios');
    }

    //----------------------------------------------------------------------------------------------------------------------


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

    // funcao para eliminar os alunos intensivos 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_I($id)
    {
        //

        $alunos_I=Intensivo::findOrFail($id)->delete();

        return redirect('usuarios');
        
    }
}
//----------------------------------------------------------------------------------------------------------------------
