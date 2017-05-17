@extends ('layout.principal')
@section('conteudo')

<h1>Cadastrar Secao</h1>
<form action="/disciplina/secao/adiciona/{{$idDisciplina}}" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />
  <input type="hidden"  name="idDisciplina" value= {{$idDisciplina}} />

 </div>

  <div class="form-group">
    <label>Titulo</label>
    <input name="titulo" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>

<br><br> <button type="button" class="btn btn-primary">Voltar</button>
@stop
