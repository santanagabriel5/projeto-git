
@extends('layout.principal')
@section('conteudo')
<h1>Detalhes de Posts: {{ $po->titulo or "nenhuma informacao contida" }} </h1>
<ul>
<li>
<b>Descricao:</b> {{ $po->descricao or "nenhuma informacao contida" }}
</li>
</ul>
