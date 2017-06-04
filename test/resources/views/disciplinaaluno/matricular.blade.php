@extends('../layout/admin_template')

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Listagem</a></li>
    <li class="active">Matricular</li>
</ol>
@endsection

@section('content')
<div class="col-lg-6">
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
              <div class="col-lg-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                <small class="small-box-footer">Carga Horária</small>
                <div class="icon">
                  <i class="ion ion-clock"></i>
                </div>
                  <div class="inner">
                      <h4><b>{{ $d->cargah or "nenhuma informacao contida" }}</h4><b>
                  </div>

                </div>
              </div>
              <div class="col-lg-6">
                <!-- small box -->
                <div class="small-box bg-red">
                <small class="small-box-footer">Período</small>
                <div class="icon">
                  <i class="ion ion-calendar"></i>
                </div>
                  <div class="inner">
                    <small>Início:</small>
                    <h4><b>{{ $d->inicio or "nenhuma informacao contida" }}</h4><b>
                    <small>Fim:</small>
                    <h4><b>{{ $d->fim or "nenhuma informacao contida" }}</h4><b>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h4><b>Alunos pendentes</b></h4>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="{{action('DisciplinaController@listaralunospendentes', $d->id)}}" class="small-box-footer">Solicitações de matrícula<i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-6 pull-right">
                <a href="{{action('DisciplinaController@matricular', $d->id)}}" class="btn btn-primary btn-block" name="Matricular">Matricular</a>
              </div>
            </div>
            <!-- /.box-body -->

          <!-- /.box -->
</div>

@endsection
