<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Pauta;
use App\Models\Intensivo;
class CaminhosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //função que trabalha com os dados da pagina inicial
      
        //funçoes responsaveis por guardar o numero de resistro em cada tabela
        $alunos=Aluno::all();
        $alunos_I=Intensivo::all();
        $num_alunos= Aluno::count();
        $num_pauta=Pauta::count();
        $num_alunos_I=Intensivo::count();

//----------------------------------------------------------------------------
        

       //logicas de calculos , para calcular , salario, alunos, total etc
        $salario= $num_alunos*2000;
        $salario_I= $num_alunos_I * 7000;
        $salario_total=$salario+ $salario_I;
        $total_alunos=$num_alunos + $num_alunos_I;
        $valor_pago=request('valor_pago');
        $valor_falta = 12000 - $valor_pago;
   //-------------------------------------------------------------------------------------------

   //estrutura condicional para verificar e tratar as condicoes de pagamentos e suas percentagens
                    if($valor_pago<12000){
            $percentagem="70%";
                return view('welcome',['alunos'=>$alunos,'num_alunos'=>$num_alunos,
                    'salario'=>$salario,'valor_falta'=> $valor_falta,'percentagem'=>$percentagem,
                        'num_pauta'=>$num_pauta,'num_alunos_I'=>$num_alunos_I,'salario_I'=> $salario_I,'salario_total'=>$salario_total,'total_alunos'=>$total_alunos]);


                    }else{
                                  $percentagem="100%";
                              return view('welcome',['alunos'=>$alunos,'num_alunos'=>$num_alunos,
                         'salario'=>$salario,'valor_falta'=> $valor_falta,'percentagem'=>$percentagem,
                        'num_alunos_I'=>$num_alunos_I,'salario_I'=> $salario_I,'salario_total'=>$salario_total,'total_alunos'=>$total_alunos]);

                        }
 

                        }

                        //-------------------------------------------------------------------------------------------------

            //funcao para tratar os alunos , usuarios refere se aos alunos
    public function usuarios()
    {
        //
       
        $pesquisar = request('pesquisar');

        if($pesquisar) {
            // Utilize o operador de concatenação correto e parâmetros nomeados para prevenir injeção de SQL
            $alunos = Aluno::where('nome', 'like', '%' . $pesquisar . '%')->get();
            $alunos_I=Intensivo::where('nome', 'like', '%' . $pesquisar . '%')->get();
            return view('usuarios', ['alunos' => $alunos, 'pesquisar' => $pesquisar,'alunos_I'=>$alunos_I]);
        } else {
            $alunos = Aluno::all();
            $alunos_I=Intensivo::all();
            return view('usuarios', ['alunos' => $alunos,'alunos_I' => $alunos_I]);
        }
       

    }
//----------------------------------------------------------------------------------------------------------------------


//funcao para chamar o formulario de cadastro
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('cadastrar');
    }

    

    //----------------------------------------------------------------------------------------------------------------------


    //funcao para realizar o cadastro na bd
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $alunos= new Aluno();

        $alunos->nome=$request->nome;
        $alunos->valor_pago=$request->valor_pago;
        $alunos->sexo=$request->sexo;
        
        $alunos->data=$request->data;
        
        $alunos->curso=$request->curso;
        $alunos->telefone=$request->telefone;

        $alunos->turno=$request->turno;
        $alunos->categoria=$request->categoria;
   
        $alunos->save();

      

    
    
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

    //funcao para editar resistros de alunos
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $alunos=Aluno::findOrFail($id);

        return view('edit_aluno',['alunos'=>$alunos]);
    }
//----------------------------------------------------------------------------------------------------------------------


//Funcao para actualizar resistro
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $alunos=Aluno::findOrfail($request->$id)->update($request->all());

        return redirect('usuarios');
    }
//----------------------------------------------------------------------------------------------------------------------

//funcao para eliminar os resistros da tabela alunos
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $alunos=Aluno::findOrFail($id)->delete();

        return redirect('usuarios');
    }

   //----------------------------------------------------------------------------------------------------------------------

    
}
