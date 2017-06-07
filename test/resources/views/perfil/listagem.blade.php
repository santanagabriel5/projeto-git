<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@extends('layout.principal')


<h1>Alterar Perfil</h1>
<tr>
  <table class="table table-striped table-bordered table-hover">
    @foreach ($user as $u)
    <td>Nome:</td>
  <td>{{$u->name}}</td>
  ]</tr>
  <tr>
    <td>Endereço:</td>
    <td>{{$u->endereco}}</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td>{{$u->email}}</td>
    <tr>
      <td>Senha:</td>
      <td>{{$u->password}}</td>

  </tr>
</tr>
<td>
  <a href="{{action('AccountSettingsController@updateAccount', $u->id)}}">
Editar
  </a>
</td>
@endforeach
