@extends('paginas.principal')

@section('titolo','Minhas Pautas')

@section('conteudo')

<style>

  
</style>

<br>
<form action="/minhas_pautas" method="get" >
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


<br>

<div class="card">
  <div class="card-header">
    Pautas De  Alunos
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead class="thead">
          <tr>
            <th>Registro</th>
            <th>Nome</th>
            <th>P-1</th>
            <th>P-2</th>
            <th>P-3</th>
            <th>Média</th>
            <th>Aproveitamento</th>

            <th>Acção</th>
            <th><a href="{{ route('gerar.pdf') }}"><button onclick="exportToPDF()" class="btn btn-primary"><i class="fa fa-file-pdf"></i> Exportar para PDF</button></a></th>
          </tr>
        </thead>
      @foreach($pautas as $pauta)
        <tbody style="text-align:center;">
          <tr>
          <td>{{$pauta->id}}</td>
            <td>{{$pauta->nome}}</td>
            <td>{{$pauta->p1}}</td>
            <td>{{$pauta->p2}}</td>
            <td>{{$pauta->p3}}</td>
            <td>{{$media=($pauta->p1+$pauta->p2+$pauta->p3)/3}}</td>
            <td>@if($media <=9 )
        <p class="valor_menos">Mal</p>
        @else
        <p class="valor_mais">Bom</p>
@endif
        </td>
           
            <td>
 <form action="/pautas_apagar/{{$pauta->id}}" method="post">
 @csrf
 @method('DELETE')
 <button class='btn btn-danger delete-btn'><ion-icon name="trash-outline"> <i class="fas fa-trash fa-2x btn-sm"></i></button>
 </form>
</td>

<td><a href="/edit_pauta/{{$pauta->id}}" class='btn btn-primary delete-btn'> <i class="fas fa-edit fa-2x btn-sm"></i>
</a></td>

          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>




@endsection
