@extends('../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Disciplina</a></li>
    <li><a href="#"> Sessão</li></a>
    <li><a href="#"> Posts</li></a>
    <li class="active"> Novo post</li>
</ol>
@endsection
@section('content')
<div class="col-lg-6">
  <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Nova tarefa</h3>
              </div>
              <div class="box-body">
                <form action="/disciplina/secao/tarefa/adiciona/{{$idSecao}}" method="post" enctype="multipart/form-data">
                  <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />

                  <input type="hidden"  name="datacriacao" value= {{date('Y-m-d')}} />

                  <input type="hidden"  name="idSecao" value= {{$idSecao}} />

                  <input type="hidden"  name="tarefa" value="1" />

                  <div class="form-group">
                    <label>Titulo</label>
                    <input name="titulo" class="form-control pull-right">
                  </div>

                  <div class="form-group">
                    <label>Descrição:</label>
                    <textarea rows="4" cols="40"  name="descricao" class="form-control"/></textarea>
                  </div>

                  <div class="form-group">
                    <label>Data entrega:</label>
                    <input rows="4" cols="40" type="date" name="data_entrega" class="form-control"/>
                  </div>

                  <div class="form-group">
                    <label>Hora entrega:</label>
                    <input rows="4" cols="40"  name="hora_entrega" class="form-control"/>
                  </div>

                  <div class="form-group">
                    <label>Arquivos</label>
                    <input type="file" name="arquivo[]" multiple />
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                  </div>
                  </form>
            </div>
</div>
@endsection
