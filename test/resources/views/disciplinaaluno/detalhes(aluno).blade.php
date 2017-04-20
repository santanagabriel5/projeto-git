
@extends('layout/principal(aluno)')

@section('conteudo')
<h1>Detalhes da disciplina: {{ $d->titulo or "nenhuma informacao contida" }} </h1>
<ul>
<li>
<b>Carga Horária:</b> {{ $d->cargah or "nenhuma informacao contida" }}
</li>
<li>
<b>Início:</b> {{ $d->inicio or "nenhuma informacao contida" }}
</li>
<li>
<b>Fim:</b> {{ $d->fim or "nenhuma informacao contida" }}
</li>
</ul>
<p> Posts</p>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{action('DisciplinaController@mostra', $d->id)}}">
        Posts
      </a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="{{action('PostsController@lista')}}">Posts</a>
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
          <a href="{{action('PostsController@mostra', $po->id)}}">
            <span class="glyphicon glyphicon-search"></span>
          </a>
        </td>
      </tr>
    @endforeach
  </table>
@endif
@stop
