@extends('../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Listagem</a></li>
    <li class="active">Nova disciplina</li>
</ol>
@endsection
@section('content')
<div class="col-lg-6">
  <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Nova Disciplina</h3>
              </div>
              <div class="box-body">
                <form action="/disciplina/adiciona" method="post">
                  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />

                  <input type="hidden"  name="codProfessor" value= {{$p->id}} />

                  <div class="form-group">
                    <label>Titulo</label>
                    <input name="titulo" class="form-control pull-right">
                  </div>

                  <div class="form-group">
                    <label>Carga horária</label>
                    <input name="cargah" class="form-control pull-right">
                  </div>

                  <div class="form-group">
                    <label>Data início</label>
                    <input name="inicio" type="date" class="form-control pull-right">
                  </div>

                  <div class="form-group">
                    <label>Data fim</label>
                    <input name="fim" type="date" class="form-control pull-right">
                  </div>

                  <br><br>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-success">Enviar</button>
                  </div>
                  </form>
            </div>
</div>
</div>
@endsection
