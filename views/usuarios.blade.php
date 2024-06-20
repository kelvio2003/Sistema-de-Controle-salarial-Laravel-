
@extends('paginas.principal')

@section('titolo','Usuarios')

@section('conteudo')


<style>

  
</style>

<br>
 
<form action="/usuarios" method="get" >
@csrf
                        
                        <div class="input-group">
                            <input type="text"  name="pesquisar" class="form-control bg-light border-0 small" placeholder="Pesquisar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    
<br>

<br>
<br>
@if(session('sms'))
<p>session('sms')</p>
@endif
<div class="card">
  <div class="card-header text-center bg-primary text-white">
    Informações de Alunos dos cursos normais
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered text-center">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Valor Pago (kz)</th>
            <th>Sexo</th>
            <th>Turno</th>
            <th>Valor Em Falta (kz)</th>
            <th>Percentagem</th>
            <th>Data</th>
            <th>categoria</th>
            <th>Ação</th>
            <th>Exportar para PDF</th>
          </tr>
        </thead>
  
        @foreach($alunos as $aluno)
        <tbody>
          <tr>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->curso}}</td>
            <td>{{number_format($aluno->valor_pago, 2, ',', '.')}}</td>
            <td>{{$aluno->sexo}}</td>
            <td>{{$aluno->turno}}</td>
            <td>{{number_format(12000 - $aluno->valor_pago, 2, ',', '.')}}</td>
            <td>@if($aluno->valor_pago >= 12000)
                <span class="valor_mais">100%</span>
              @else
                <span class="valor_menos">70%</span>
              @endif
            </td>
            <td>{{$aluno->data}}</td>
            <th>{{$aluno->categoria}}</th>
            <td>
              <form action="/usuarios/{{$aluno->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger delete-btn"><i class="fas fa-trash"></i></button>
              </form>
            </td>
            <td><a href="/edit_aluno/{{$aluno->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>
<!----------------------------------------------------------------------------------------------------------------------!-->



<br>










<div class="card">
  <div class="card-header text-center bg-primary text-white">
    Informações de Alunos dos cursos Intensivos
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered text-center">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Curso</th>
            <th>Valor Pago (kz)</th>
            <th>Sexo</th>
            <th>Turno</th>
            <th>Valor Em Falta (kz)</th>
            <th>Percentagem</th>
            <th>Data</th>
            <th>categoria</th>
            <th>Ação</th>
            <th>Exportar para PDF</th>
          </tr>
        </thead>
        @foreach($alunos_I as $aluno_I)
        <tbody>
          <tr>
            <td>{{$aluno_I->id}}</td>
            <td>{{$aluno_I->nome}}</td>
            <td>{{$aluno_I->curso}}</td>
            <td>{{number_format($aluno_I->valor_pago, 2, ',', '.')}}</td>
            <td>{{$aluno_I->sexo}}</td>
            <td>{{$aluno_I->turno}}</td>
            <td>{{number_format(20000 - $aluno_I->valor_pago, 2, ',', '.')}}</td>
            <td>@if($aluno_I->valor_pago >= 20000)
                <span class="valor_mais">100%</span>
              @else
                <span class="valor_menos">70%</span>
              @endif
            </td>
            <td>{{$aluno_I->data}}</td>
            <th>{{$aluno_I->categoria}}</th>
            <td>
              <form action="/apagar/{{$aluno_I->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger delete-btn"><i class="fas fa-trash"></i></button>
              </form>
            </td>
            <td><a href="/edit_aluno/{{$aluno_I->id}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>


<br>


@endsection
