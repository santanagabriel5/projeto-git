@extends('../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Disciplina</a></li>
</ol>
@endsection
@section('content')
<div class="col-lg-6">
  <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Novo post</h3>
              </div>
              <div class="box-body">
              <form action="/disciplina/posts/adiciona/{{$idDisciplina}}" method="post">
                <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />

                <input type="hidden"  name="idDisciplina" value= {{$idDisciplina}} />


                  <div class="form-group">
                    <label>Titulo</label>
                    <input name="titulo" class="form-control pull-right">
                  </div>

                  <div class="form-group">
                    <label>Descricao</label>
                    <textarea rows="4" cols="40"  name="descricao" class="form-control"/></textarea>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </div>
                  </form>
            </div>
</div>
@endsection
