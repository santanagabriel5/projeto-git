@extends ('layout.principal')
@section('conteudo')

<h1>Cadastrar Disciplina</h1>
<div align="right">
<a href="{{action('DisciplinaController@lista')}}">
<button type="button" class="btn btn-primary">Voltar as Disciplinas</button></a>
</div>
<form action="/disciplina/adiciona" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"  name="codProfessor" value= {{$p->id}} />

  <div class="form-group">
    <label>Titulo</label>
    <input name="titulo" class="form-control">
  </div>

  <div class="form-group">
    <label>Carga horária</label>
    <input name="cargah" class="form-control">
  </div>

  <div class="form-group">
    <label>Data início</label>
    <input name="inicio" type="date" class="form-control">
  </div>

  <div class="form-group">
    <label>Data fim</label>
    <input name="fim" type="date" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>
@stop
