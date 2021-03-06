@extends('../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Disciplina</a></li>
    <li><a href="#"> Sessão</li></a>
    <li><a href="#"> Posts</li></a>
    <li class="active"> Atualizar tarefa</li>
</ol>
@endsection
@section('content')
<div class="col-lg-6">
  <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Atualizar tarefa</h3>
              </div>
              <div class="box-body">
                <form action="{{action('TarefaController@atualiza', $po->id)}}" method="post">

                  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

                  <input type="hidden" name="atualiza" value="{{$po->id}}" />

                  <input type="hidden"  name="codProfessor" value= "{{$p->id}}"  />

                  <input type="hidden"
                  name="id" value="{{$po->id}}" />

                  <div class="form-group">
                    <label>Titulo:</label>
                    <input name="titulo" class="form-control pull-right" value = "{{$po->titulo}}">
                  </div>

                  <div class="form-group">
                    <label>Descrição:</label>
                    <textarea rows="4" cols="40"  name="descricao" class="form-control" value = "{{$po->descricao}}"/></textarea>
                  </div>

                  <div class="form-group">
                    <label>Data entrega:</label>
                    <textarea rows="4" cols="40"  name="data_entrega" class="form-control" value = "{{$po->data_entrega}}"/></textarea>
                  </div>

                  <div class="form-group">
                    <label>Hora entrega:</label>
                    <textarea rows="4" cols="40"  name="hora_entrega" class="form-control" value = "{{$po->hora_entrega}}"/></textarea>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Enviar</button>
                  </div>
                  </form>
            </div>
</div>
@endsection
