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
                       @foreach ($disciplinaaluno as $d)
                        @if ($d->Acesso == 1)
                          <ul class="todo-list">
                            @foreach ($disciplina as $dis)
                            @if($d->IdDisciplina == $dis->id)

                            <li>
                              <!-- drag handle -->
                              <span class="handle">
                                    <i class="fa fa-ellipsis-v"></i>
                                    <i class="fa fa-ellipsis-v"></i>
                               </span>

                              <!-- todo text -->
                              <span class="text">{{$dis->titulo}}</span>
                              <!-- General tools such as edit or delete-->
                              <div class="tools">
                                <a href="{{action('DisciplinaController@mostra', $dis->id)}}"><i class="fa fa-info"></i></a>
                              </div>
                            </li>

                            @endif
                            @endforeach
                          </ul>
                        @endif


                       @endforeach


                       <center><a href="{{action('DisciplinaController@listagemAluno')}}" class="btn btn-primary" name="Matricular">Todas as disciplinas</a></center>
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
