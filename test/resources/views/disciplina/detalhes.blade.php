<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@extends('layout.principal')
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
<li>
<b> <a href="{{action('DisciplinaController@listaralunospendentes', $d->id)}}">Alunos pendentes</a></b>
</li>
</ul>
 <div align="right">
<a href="{{action('DisciplinaController@lista')}}">
<button type="button" class="btn btn-primary">Voltar as Disciplinas</button></a>
</div>
<br><br>

 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="{{action('DisciplinaController@mostra', $d->id)}}">

Secão
</a>
</div>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="{{action('SecaoController@lista')}}">Secao</a>
</li>
<li>
<a href="{{action('SecaoController@novo', $d->id)}}"> Novo </a>
</li>
</ul>
</div>
</nav>

@if(empty($secao))
<div class="alert alert-danger">
Você não tem nenhuma seção
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
</td>
<td>
  <a href="{{action('SecaoController@remove', $se->id)}}">
    <span class="glyphicon glyphicon-trash"></span>
  </a>
</td>
<td>
  <a href="{{action('SecaoController@atualizar', $d->id)}}">
    <span class="glyphicon glyphicon-pencil"></span>
  </a>
</td>
</tr>
@endforeach
</table>
@endif
@stop
