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
            </div><!-- /.box-header -->

                     <div class="box-body">
                       <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                       <center><a href="{{action('DisciplinaController@lista')}}" class="btn btn-primary" name="Matricular">Todas as disciplinas</a></center>
                     </div>
                     <!-- /.box-body -->
                     <div class="box-footer clearfix no-border">

                       </div>
                     </div>
                   </div>

                   <!-- TO DO List -->
                 </div><!-- /.box-body -->
               </div><!-- /.box -->
          <!-- Chat box -->

          <!-- /.box -->
</section>
@endsection
