@extends('.../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Listagem</a></li>
    <li class="active">Detalhes disciplina</li>
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
                    <span class="info-box-text">Alunos pendentes</span>
                    <span class="info-box-text"><a href="{{action('DisciplinaController@listaralunospendentes', $d->id)}}">Clique aqui</a></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>

<div class="col-lg-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Seções</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list ui-sortable">
                  @foreach ($secao as $se)
                  <li>
                    <!-- drag handle -->
                    <span class="handle ui-sortable-handle">
                          <i class="fa fa-folder-open-o"></i>
                     </span>

                    <!-- todo text -->
                    <span class="text"><a href="{{action('SecaoController@mostra', $se->id)}}">{{$se->titulo}}</a></span>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <a href="{{action('SecaoController@mostra', $se->id)}}"><i class="fa fa-info"></i></a>
                      <a href="{{action('SecaoController@atualizar', $d->id)}}"><i class="fa fa-edit"></i></a>
                      <a href="{{action('SecaoController@remove', $d->id)}}"><i class="fa fa-trash-o"></i></a>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div class="box-footer clearfix no-border">
                        <div class="box-tools pull-right">
                          <ul class="pagination pagination-sm inline">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                          </ul>
                        </div>
                        <a href="{{action('SecaoController@novo', $d->id)}}"><button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> Nova seção</button></a>
                      </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
</div>

@endsection
