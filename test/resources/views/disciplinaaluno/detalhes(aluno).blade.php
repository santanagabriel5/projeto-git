<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
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
<div align="right">
<a href="{{action('DisciplinaController@lista')}}">
<button type="button" class="btn btn-primary">Voltar as Disciplinas</button></a>
</div>
<br><BR>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{action('DisciplinaController@mostra', $d->id)}}">
 Seção
</a>
</div>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="{{action('SecaoController@lista')}}">Secão</a>
</li>
</ul>
</div>
</nav>

@if(empty($secao))
<div class="alert alert-danger">
 Não tem nenhuma seção
</div>
@else
<table class="table table-striped table-bordered table-hover">
@foreach ($secao as $se)
<tr>
<td>{{$se->titulo}}</td>

<td>
  <a href="{{action('SecaoController@mostra', $se->id)}}">
    <span class="glyphicon glyphicon-search"></span>
  </a>
</tr>
@endforeach
</table>
@endif
@stop
