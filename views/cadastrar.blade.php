@extends('paginas.principal')

@section('titolo','cadastrar')

@section('conteudo')
<br>







              <form class="user" method="POST" action="/cadastrados">
<div class="container">

@csrf
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-header text-center bg-primary text-white">
  Alunos dos cursos Normais
  </div>
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
              
                <form action="/" method="post"></form>
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-15">
                        <div class="p-5">
                            <div class="text-center">
                          
                            </div>
                           
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                    
                                        placeholder="Nome Completo..." name="nome">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                    
                                        placeholder="Contacto" required name="telefone">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                    
                                        name="valor_pago" placeholder="Valor Pago">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       
                                         required name="turno" placeholder="Periodo">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                      
                                         required  name="curso" placeholder="Curso">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                      
                                         required  name="categoria" placeholder="Categoria">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                     
                                         required name="sexo" placeholder="Genero">
                                </div>

                                <div class="form-group">
                  <div class="form-floating">
                    <input type="date" class="form-control form-control-user" id="floatingZip" name="data"placeholder="Data">
                    <label for="floatingZip">Cadastrado Em</label>
                  </div>
                </div>
                    <button class="btn btn-primary btn-user "> cadastrar Aluno</button>
                                

                              
                               
                            </form>
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>


<!-- Formulario para cadastrar alunos do curso Intensivo-->





<form class="user" method="POST" action="/add_I">
<div class="container">

@csrf
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-header text-center bg-primary text-white">
  Alunos dos cursos Intensivos
  </div>

            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
              
                <form action="/" method="post"></form>
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-15">
                        <div class="p-5">
                            <div class="text-center">
                          
                            </div>
                           
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                    
                                        placeholder="Nome Completo..." name="nome">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                    
                                        placeholder="Contacto" required name="telefone">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                    
                                        name="valor_pago" placeholder="Valor Pago">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                       
                                         required name="turno" placeholder="Periodo">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                      
                                         required  name="curso" placeholder="Curso">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                      
                                         required  name="categoria" placeholder="Categoria">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                     
                                         required name="sexo" placeholder="Genero">
                                </div>

                                <div class="form-group">
                  <div class="form-floating">
                    <input type="date" class="form-control form-control-user" id="floatingZip" name="data"placeholder="Data">
                    <label for="floatingZip">Cadastrado Em</label>
                  </div>
                </div>
                    <button class="btn btn-primary btn-user "> cadastrar Aluno</button>
                                

                              
                               
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
