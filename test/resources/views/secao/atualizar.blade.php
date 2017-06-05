@extends('.../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Disciplina</a></li>
    <li class="active"> Atualizar Seção</li>
</ol>
@endsection
@section('content')
<div class="col-lg-6">
  <div class="box box-success">
    <div class="box-header">
      <h3 class="box-title">Atualizar seção</h3>
    </div>
    <div class="box-body">
      <form action="/disciplina/secao/atualiza/{{$se->id}}" method="post">

        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <input type="hidden" name="atualiza" value="1" />

        <input type="hidden" name="id" value="{{$se->id}}" />

      <div class="form-group">
      <label>Titulo</label>
      <input name="titulo" class="form-control pull-right" value = "{{$se->titulo}}">
      </div>

      <button type="submit" class="btn btn-success btn-block">Atualizar</button>
      </form>
    </div>
  </div>
</div>
@endsection
