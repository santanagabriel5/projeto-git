
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
</ul>

  <button type="button" name="Matricular"><a href="#">Matricular nessa disciplina</a></button>

@endif
@stop
