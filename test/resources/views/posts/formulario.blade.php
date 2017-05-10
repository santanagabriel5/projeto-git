@extends ('layout.principal')
@section('conteudo')

<h1>Cadastrar Posts</h1>
<form action="/disciplina/posts/adiciona/{{$idDisciplina}}" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"  name="datacriacao" value= {{date('Y-m-d')}} />

  <input type="hidden"  name="idDisciplina" value= {{$idDisciplina}} />

  <div class="form-group">
    <label>Titulo</label>
    <input name="titulo" class="form-control">
  </div>
  <div class="form-group">
    <label>Descricao</label>
    <textarea rows="4" cols="40"  name="descricao" class="form-control"/></textarea>
  </div>

  <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>
@stop
