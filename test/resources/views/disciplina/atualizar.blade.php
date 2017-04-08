@extends ('layout.principal')
@section('conteudo')

<h1>Atualizar produto</h1>
<form action="/disciplina/atualiza" method="post">

  <input type="hidden"
  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"
  name="atualiza" value="1" />

  <input type="hidden"  name="codProfessor" value=  {{$p->id}}  />


  <input type="hidden"
  name="id" value="{{$d->id}}" />


<div class="form-group">
<label>Titulo</label>
<input name="titulo" class="form-control" value = "{{$d->titulo}}">

</div>
<div class="form-group">
<label>Carga horária</label>
<input name="cargah" class="form-control" value = "{{$d->cargah}}">


<div class="form-group">
<label>Data início</label>
<input name="inicio" type="date" class="form-control" value = "{{$d->inicio}}">
</div>

<div class="form-group">
<label>Data fim</label>
<input name="fim" type="date" class="form-control" value = "{{$d->fim}}">
</div>

<button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
@stop
