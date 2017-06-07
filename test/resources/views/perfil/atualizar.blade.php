@extends ('layout.principal')
@section('conteudo')

<h1>Editar Pefil </h1>

<form action="{{action('AccountSettingsController@atualiza')}}" method="post">


  <input type="hidden"
  name="_token" value="{{{ csrf_token() }}}" />

  <input type="hidden"
  name="atualiza" value="1" />

  <input type="hidden"
  name="id" value="{{$u->id}}" />


<div class="form-group">
<label>Nome</label>
<input name="name" class="form-control" value = "{{$u->name}}">

</div>
<div class="form-group">
<label>Endereco</label>
<input name="endereco" class="form-control" value = "{{$u->endereco}}">


<div class="form-group">
<label>Email</label>
<input name="email" class="form-control"  value = "{{$u->email}}">
</div>

<div class="form-group">
<label>Senha</label>
<input name="password" type="password" class="form-control"  value = "">
</div>

<button type="submit" class="btn btn-primary btn-block">Editar</button><Br>

</form>
@stop
