@extends('../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Disciplina</a></li>
    <li><a href="#"> Sessão</li></a>
    <li><a href="{{action('PostsController@lista')}}"> Posts</li></a>
    <li class="active"> Novo post</li>
</ol>
@endsection
@section('content')
<div class="col-lg-6">
  <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Atualizar post</h3>
              </div>
              <div class="box-body">
                <form action="/disciplina/secao/posts/atualiza" method="post">

                  <input type="hidden"
                  name="_token" value="{{{ csrf_token() }}}" />

                  <input type="hidden"
                  name="atualiza" value="1" />

                  <input type="hidden"  name="codProfessor" value=  {{$po->id}}  />

                  <input type="hidden"
                  name="id" value="{{$po->id}}" />

                  <div class="form-group">
                    <label>Titulo</label>
                    <input name="titulo" class="form-control pull-right" value = "{{$po->titulo}}">
                  </div>

                  <div class="form-group">
                    <label>Descricao</label>
                    <textarea rows="4" cols="40"  name="descricao" class="form-control" value = "{{$po->descricao}}"/></textarea>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Enviar</button>
                  </div>
                  </form>
            </div>
</div>
@endsection
