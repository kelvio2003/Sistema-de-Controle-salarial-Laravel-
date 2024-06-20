@extends('paginas.principal')

@section('titolo','cadastrar_Pauta')

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
                                <h1 class="h4 text-gray-900 mb-4">Lançamento de Notas!</h1>
                            </div>
                            <form class="user" action="/criar" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nome" class="form-control form-control-user"
                                      
                                        placeholder="Nome Completo...">
                                </div>
                                <div class="form-group">
                                    <input type="text"name="p1" class="form-control form-control-user"
                                      
                                        placeholder="Primeira Nota...">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="p2"class="form-control form-control-user"
                                       
                                        placeholder="Segunda Nota...">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="p3"class="form-control form-control-user"
                                      
                                        placeholder="Terceira Nota...">
                                </div>
                               
                               
                                <button class="btn btn-primary btn-user btn-block">
                                    Adicionar a Pauta
</button>
                              
                               
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
