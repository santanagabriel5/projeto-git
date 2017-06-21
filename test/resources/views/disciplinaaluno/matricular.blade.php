@extends('../layout/admin_template')

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Listagem</a></li>
    <li class="active">Matricular</li>
</ol>
@endsection

@section('content')
<div class="col-lg-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Detalhes da disciplina: {{ $d->titulo or "nenhuma informacao contida" }}</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-yellow">
          <span class="info-box-icon"><i class="fa fa-clock-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Carga Horária</span>
            <span class="info-box-number">{{ $d->cargah or "nenhuma informacao contida" }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-red">
          <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

          <div class="info-box-content">
            <span class="info-box-text"><small>Período:</small></span>
            <span class="info-box-number">{{ $d->inicio or "nenhuma informacao contida" }} até
            <span class="info-box-number">{{ $d->fim or "nenhuma informacao contida" }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box bg-blue">
          <span class="info-box-icon"><i class="fa fa-user-plus"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Matricular</span>
            <span class="info-box-text"><a href="{{action('DisciplinaController@matricular', $d->id)}}">Clique aqui</a></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

    </div>
    <!-- /.box-body -->
  </div>
@endsection
