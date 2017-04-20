@extends ('layout.principal')
@section('conteudo')

<h1>Atualizar Post</h1>
<form action="/disciplina/posts/atualiza" method="post">

  <input type="hidden"
  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"
  name="atualiza" value="1" />

  <input type="hidden"  name="codProfessor" value=  {{$p->id}}  />

  <input type="hidden"
  name="id" value="{{$po->id}}" />


<div class="form-group">
<label>Titulo</label>
<input name="titulo" class="form-control" value = "{{$post->titulo}}">

</div>
<div class="form-group">
<label>Descricao</label>
<input name="descricao" class="form-control" value = "{{$post->descricao}}">

<button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
@stop
