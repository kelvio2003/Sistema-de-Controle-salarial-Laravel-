@extends('paginas.principal')

@section('titolo','Home')

@section('conteudo')


<!----------------------------------------------------------------------------------------------------------------------!-->



<!--Pagina inicila e placares//----------------------------------------------------------------------------------------------------------------------!-->

<br>
   <!-- Content Row -->
   <div class="row">
  <!-- Placar de Salário e Número de Alunos -->
  <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-8">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Salario (Cursos Normais) </div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">{{number_format($salario, 2, ',', '.')}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- Placar de Salário e Número de Alunos -->
<div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-8">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pautas Criadas</div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">{{$num_pauta}}</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Placar de Salário e Número de Alunos -->
  <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Alunos </div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">{{$total_alunos}}</div>
                                        </div>
                                        
                                        <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                         <!-- Placar de Salário e Número de Alunos -->
                         <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Salário (Intensivo) </div>
                                            <div class="h1 mb-0 font-weight-bold text-gray-800">{{number_format($salario_I, 2, ',', '.')}}</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Placar de Salário e Número de Alunos -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Salário Total </div>
                                                <div class="h1 mb-0 font-weight-bold text-gray-800">{{number_format($salario_total, 2, ',', '.')}}</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card text-center">
                <div class="card-header">
                    Placar do Evento
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nome do Evento</h5>
                    <p class="card-text">Detalhes adicionais sobre o evento.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Data de Início: <strong>12/05/2024</strong></li>
                        <li class="list-group-item">Data de Término: <strong>14/05/2024</strong></li>
                    </ul>
                </div>
                <div class="card-footer text-muted">
                    2 dias atrás
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------------------------------------------------------------------------------!-->

<!---------------------------------------------------------------------Codigo Java javacript//----------------------------!-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection


<!----------------------------------------------------------------------------------------------------------------------!-->