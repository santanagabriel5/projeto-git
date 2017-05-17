<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@extends('layout.principal')
@section('conteudo')
<h1>Detalhes de Posts: {{ $po->titulo or "nenhuma informacao contida" }} </h1>
<ul>
<li>
Data de postagem: {{ $po->datacriacao or "nenhuma informacao contida" }}
=
</li>
</ul>
Detalhes: {{ $po->descricao or "nenhuma informacao contida" }}


@if(empty($comentarios))
  <div class="alert alert-danger">
    Não há nenhum comentario.
  </div>
@else
  <table class="table table-striped table-bordered table-hover">
    @foreach ($comentarios as $c)
      <tr>
        <td>{{$c->nome}}</td><td>{{$c->conteudo}}</td>
      </tr>

  </table>

 @endforeach

<form action="{{action('PostsController@AdicionarComentario',$po->id)}}" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />

<<<<<<< HEAD
  <input type="hidden"  name="post_id" value= "{{$po->id}}" />

=======
  <input type="hidden"  name="post_id" value= {{$po->id}} />
<br>  <center>Comentarios</center><br>
>>>>>>> 54fa547a45243890a831fe951a40dfd6f1610a45
  <div class="form-group">
    <label>Nome:</label>
    <input name="nome" class="form-control">
  </div>
  <div class="form-group">
    <label>Comentário:</label>
    <textarea rows="4" cols="40"  name="conteudo" class="form-control"/></textarea>
  </div>

  <button type="submit" class="btn btn-primary btn-block">Salvar</button>
  </form>
@endif

@endsection
