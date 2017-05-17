@extends ('layout.principal')
@section('conteudo')

<h1>Atualizar Secao</h1>
<form action="/disciplina/secao/atualiza" method="post">

  <input type="hidden"
  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"
  name="atualiza" value="1" />

  <input type="hidden"  name="codProfessor" value=  {{$se->id}}  />

  <input type="hidden"
  name="id" value="{{$se->id}}" />


<div class="form-group">
<label>Titulo</label>
<input name="titulo" class="form-control" value = "{{$se->titulo}}">
</div>

<button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
@stop
