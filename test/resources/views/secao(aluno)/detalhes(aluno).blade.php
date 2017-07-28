<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@extends('../layout/admin_template')
@section('content')
<h1>Detalhes de Seção: {{ $se->titulo or "nenhuma informacao contida" }} </h1>
<div align="right">
<a href="{{action('DisciplinaController@lista')}}">
<button type="button" class="btn btn-primary">Voltar as Disciplinas</button></a>
</div>
<Br><br>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
 Posts
</a>
</div>
<ul class="nav navbar-nav navbar-right">
<li>
</li>
</ul>
</div>
</nav>

@if(empty($posts))
  <div class="alert alert-danger">
    Você não tem nenhum post
  </div>
@else
  <table class="table table-striped table-bordered table-hover">
    @foreach ($posts as $po)
      <tr>
        <td>{{$po->titulo}}</td>

        <td>
          @if ($po->tarefa ==0)
          <span class="text"><a href="{{action('PostsController@mostra', $po->id)}}">{{$po->titulo}}</a></span>
          @else
          <span class="text"><a href="{{action('TarefaController@mostra', $po->id)}}">{{$po->titulo}}</a></span>
          @endif
            <span class="glyphicon glyphicon-search"></span>
          </a>
        </td>
      </tr>
    @endforeach
  </table>
@endif
@stop
