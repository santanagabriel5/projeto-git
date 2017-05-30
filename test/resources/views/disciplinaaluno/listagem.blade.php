@extends('admin_template')

@section('content')
<section class="content">
  <section class="col-lg-12 connectedSortable ui-sortable">
          <!-- Custom tabs (Charts with tabs)-->

          <div class="box box-success">
                 <div class="box-header with-border">
                   <h3 class="box-title">Disciplinas</h3>

                 </div><!-- /.box-header -->
                 <div class="box-body">
                   <div style="position: relative; left: 0px; top: 0px;">
                     <div class="box-header ui-sortable-handle" style="cursor: move;">
                       <div class="box-tools pull-right">
                         <div class="has-feedback">
                           <input type="text" class="form-control input-sm" placeholder="Pesquisar...">
                           <span class="glyphicon glyphicon-search form-control-feedback"></span>
                         </div>
                       </div><!-- /.box-tools -->

                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                       <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                       <ul class="todo-list ui-sortable">
                         @foreach ($disciplina as $d)
                         <li>
                           <!-- drag handle -->
                           <span class="handle ui-sortable-handle">
                                 <i class="fa fa-ellipsis-v"></i>
                                 <i class="fa fa-ellipsis-v"></i>
                            </span>

                           <!-- todo text -->
                           <span class="text">{{$d->titulo}}</span>
                           <!-- General tools such as edit or delete-->
                           <div class="tools">
                             <a href="{{action('DisciplinaController@mostra', $d->id)}}"><i class="fa fa-folder-open-o"></i></a>
                           </div>
                         </li>
                         @endforeach
                       </ul>
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
                       <button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> Add Disciplina</button>

                     </div>

                   </div>

                   <!-- TO DO List -->
                 </div><!-- /.box-body -->
               </div><!-- /.box -->
          <!-- Chat box -->

          <!-- /.box -->
</section>
@endsection
