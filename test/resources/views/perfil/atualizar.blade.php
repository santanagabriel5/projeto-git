@extends ('../layout/admin_template')
@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h1>Editar Pefil </h1>
    <form class="form-horizontal" role="form" method="POST" action="{{action('AccountSettingsController@atualiza')}}">
        {{ csrf_field() }}


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
      </div>


        <div class="form-group">
        <label>Email</label>
        <input name="email" class="form-control"  value = "{{$u->email}}">
        </div>

        <div class="form-group">
        <label>Senha</label>
        <input name="password" type="password" class="form-control"  value = "">
        </div>

        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Editar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>

@stop
