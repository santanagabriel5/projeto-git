@extends ('layout.principal')
@section('conteudo')

<h1>Atualizar Secao</h1>
<form action="/disciplina/secao/atualiza/{{$se->id}}" method="post">


  <input type="hidden"
  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"
  name="atualiza" value="1" />


  <input type="hidden"
  name="id" value="{{$se->id}}" />


<div class="form-group">
<label>Titulo</label>
<input name="titulo" class="form-control" value = "{{$se->titulo}}">
</div>

<button type="submit" class="btn btn-primary btn-block">Editar</button>
</form>
@stop
