<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@extends ('layout.principal')
@section('conteudo')

<h1>Atualizar Post</h1>
<form action="/disciplina/secao/posts/atualiza" method="post">

  <input type="hidden"
  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"
  name="atualiza" value="1" />

  <input type="hidden"  name="codProfessor" value=  {{$po->id}}  />

  <input type="hidden"
  name="id" value="{{$po->id}}" />


<div class="form-group">
<label>Titulo</label>
<input name="titulo" class="form-control" value = "{{$po->titulo}}">

</div>
<div class="form-group">
<label>Descricao</label>
<input name="descricao" class="form-control" value = "{{$po->descricao}}">

<button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
@stop
