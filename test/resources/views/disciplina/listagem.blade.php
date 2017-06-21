@extends('../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Listagem</a></li>
</ol>
@endsection
@section('content')
<section class="content">

  <section class="col-lg-12 connectedSortable ui-sortable">
          <!-- Custom tabs (Charts with tabs)-->

          <div class="box box-success">
                      <div class="box-header ui-sortable-handle" style="cursor: move;">

                        <h3 class="box-title">Disciplinas</h3>

                        <!--search-->
                        <div class="box-tools pull-right">
                          <div class="has-feedback">
                            <input type="text" class="form-control input-sm" placeholder="Pesquisar...">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                          </div>
                        </div><!-- /.box-tools -->
                        <!-- end search-->

                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                        <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                        <div class="col-lg-4">
                        <ul class="todo-list">
                          @foreach ($disciplina as $d)
                          <li>
                            <!-- drag handle -->
                            <span class="handle">
                                  <i class="fa fa-ellipsis-v"></i>
                                  <i class="fa fa-ellipsis-v"></i>
                             </span>

                            <!-- todo text -->
                            <span class="text">{{$d->titulo}}</span>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                              <a href="{{action('DisciplinaController@listaralunospendentes', $d->id)}}"><i class="fa fa-user-plus"></i></a>
                              <a href="{{action('DisciplinaController@mostra', $d->id)}}"><i class="fa fa-info"></i></a>
                              <a href="{{action('DisciplinaController@atualizar', $d->id)}}"><i class="fa fa-edit"></i></a>
                              <a href="{{action('DisciplinaController@remove', $d->id)}}"><i class="fa fa-trash-o"></i></a>
                            </div>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                      </div>
                      <!-- /.box-body -->
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
                        <a href="{{action('DisciplinaController@novo')}}"><button type="button" class="btn btn-default pull-left" href="{{action('DisciplinaController@novo')}}"><i class="fa fa-plus"></i> Nova disciplina</button></a>
                      </div>
                    </div>
                  </section>
                </section>
@endsection
