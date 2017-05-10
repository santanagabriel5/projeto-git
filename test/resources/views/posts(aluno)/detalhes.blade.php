
@extends('layout.principal(aluno)')
@section('conteudo')
<h1>Detalhes de Posts: {{ $po->titulo or "nenhuma informacao contida" }} </h1>
<ul>
<li>
<b>Descricao:</b> {{ $po->descricao or "nenhuma informacao contida" }}
</li>
</ul>


<form action="/comentarios/{{$po->id}}" method="post">
  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"  name="post_id" value= {{$po->id}} />

  <div class="form-group">
    <label>Nome:</label>
    <input name="nome" class="form-control">
  </div>
  <div class="form-group">
    <label>Comentário:</label>
    <textarea rows="4" cols="40"  name="comentario" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>
@endsection
