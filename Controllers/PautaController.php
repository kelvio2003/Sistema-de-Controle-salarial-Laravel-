<?php

namespace App\Http\Controllers;

use App\Models\Pauta;
use Illuminate\Http\Request;


class PautaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_pautas()
    {
        //

       
      
   


        $pesquisar = request('pesquisar');

        if($pesquisar) {
            // Utilize o operador de concatenação correto e parâmetros nomeados para prevenir injeção de SQL
            $pautas = Pauta::where('nome', 'like', '%' . $pesquisar . '%')->get();
            return view("minhas_pautas",['pautas'=>$pautas, 'pesquisar' => $pesquisar]);
        } else {
            $pautas=Pauta::all();

            return view("minhas_pautas",['pautas'=>$pautas]); 
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_pautas()
    {
        //

        return view('pautas');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepauta(Request $request)
    {
        //

        $pautas= new Pauta();

        $pautas->nome=$request->nome;
        
        $pautas->p1=$request->p1;
        
        $pautas->p2=$request->p2;
        
        $pautas->p3=$request->p3;

        $pautas->save();

       
        return redirect('minhas_pautas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pauta  $pauta
     * @return \Illuminate\Http\Response
     */
    public function show(Pauta $pauta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pauta  $pauta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pauta $pauta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pauta  $pauta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pauta $pauta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_pautas($id)
    {
        //
        
    }
}
