<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@extends('layout.principal(aluno)')
@section('conteudo')

<h1>Detalhes de Posts: {{ $po->titulo or "nenhuma informacao contida" }} </h1>
<ul>
<li>
Data de postagem: {{ $po->datacriacao or "nenhuma informacao contida" }}
</li>
</ul>
Detalhes: {{ $po->descricao or "nenhuma informacao contida" }}



@if(empty($comentarios))
  <div class="alert alert-danger">
    Não há nenhum comentario.
  </div>
@else
  <table class="table table-striped table-bordered table-hover">
    <th>nome</th><th>datacriacao</th><th>conteudo</th>

    @foreach ($comentarios as $c)
      <tr>
        <td>{{$c->nome}}</td><td>{{$c->datacriacao}} {{$c->Hora}}</td><td>{{$c->conteudo}}</td>
      </tr>
      @endforeach

  </table>
  @endif

 <?php     $user = app('Illuminate\Contracts\Auth\Guard')->user();
?>
<form action="{{action('PostsController@AdicionarComentario', $po->id)}}" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"  name="datacriacao" value= {{date("Y-m-d H:i:s")}} />
  <input type="hidden"  name="hora" value= {{date("H:i:s")}} />


  <input type="hidden"  name="post_id" value= {{$po->id}} />


  <input type="hidden"  name="nome" value= {{$user['name']}} />

<br>  <center>Comentarios</center><br>
  <div class="form-group">
    <label>Comentário:</label>
    <textarea rows="4" cols="40"  name="conteudo" class="form-control"/></textarea>
  </div>

  <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>

@endsection
