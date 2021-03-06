@extends('.../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Listagem</a></li>
    <li><a href="#">Detalhes disciplina</a></li>
    <li class="active">{{ $se->titulo or "nenhuma informacao contida" }}</li>
</ol>
@endsection
@section('content')

<div class="col-lg-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $se->titulo or "nenhuma informacao contida" }}</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if(empty($posts))
              <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Não há posts nessa seção.</h4>
              </div>
              @else
                <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                <ul class="todo-list ui-sortable">
                  @foreach ($posts as $po)
                  <li>
                    <!-- drag handle -->
                    <span class="handle ui-sortable-handle">
                          <i class="fa fa-folder-open-o"></i>
                     </span>

                    <!-- todo text -->
                    @if ($po->tarefa ==0)
                    <span class="text"><a href="{{action('PostsController@mostra', $po->id)}}">{{$po->titulo}}</a></span>
                    @else
                    <span class="text"><a href="{{action('TarefaController@mostra', $po->id)}}">{{$po->titulo}}</a></span>
                    @endif
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <a href="{{action('PostsController@mostra', $po->id)}}"><i class="fa fa-info"></i></a>
                      <a href="{{action('PostsController@atualizar', $po->id)}}"><i class="fa fa-edit"></i></a>
                      <a href="{{action('PostsController@remove', $po->id)}}"><i class="fa fa-trash-o"></i></a>
                    </div>
                  </li>
                  @endforeach
                </ul>
                @endif
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
                        <a href="{{action('PostsController@novo', $se->id)}}"><button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> Novo post</button></a>
                        <a href="{{action('TarefaController@novo', $se->id)}}"><button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> Nova tarefa</button></a>
                      </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>

@endsection
