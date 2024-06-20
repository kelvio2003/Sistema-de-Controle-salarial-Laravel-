@extends('paginas.principal')

@section('titolo','Editar_Aluno')

@section('conteudo')
<br>


<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-15">
                        <div class="p-5">
                        
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Aluno-{{$alunos->nome}}!</h1>
                            </div>
                            <form class="user" action="/atualizar_aluno/{{$alunos->id}}" method="post">
                                @csrf
                                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-15">
                        <div class="p-5">
                            <div class="text-center">
                          
                            </div>
                           
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                    
                                        placeholder="Nome Completo..." name="nome" value="{{$alunos->nome}}">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                    
                                        placeholder="Contacto" required name="telefone"value="{{$alunos->telefone}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                    
                                        name="valor_pago" value="{{$alunos->valor_pago}}" placeholder="Valor Pago">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       
                                         required name="turno" value="{{$alunos->turno}}" placeholder="Periodo">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                      
                                         required  name="curso" value="{{$alunos->curso}}" placeholder="Curso">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                      
                                         required  name="categoria" placeholder=""value="{{$alunos->categoria}}" value>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                     
                                         required name="sexo" value="{{$alunos->sexo}}" placeholder="Genero">
                                </div>

                                <div class="form-group">
                  <div class="form-floating">
                    <input type="date" value="{{$alunos->data}}"class="form-control form-control-user" id="floatingZip" name="data"placeholder="Data">
                    <label for="floatingZip">Cadastrado Em</label>
                  </div>
                </div>
                    <button class="btn btn-primary btn-user "> Atualizar Aluno</button>
                                

                              
                               
                            </form>
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
@endsection
