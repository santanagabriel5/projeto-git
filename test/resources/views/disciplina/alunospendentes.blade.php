@extends('../layout/admin_template')

@section('content')
      @if(empty($alunos))
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-ban"></i> Nenhum aluno pendente</h4>
      </div>
      @else
        @foreach ($alunos as $d)
        <div class="col-lg-3">
        <div class="box box-primary">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

                <h3 class="profile-username text-center">{{$d->name}}</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <a href="{{action('DisciplinaController@permitiracesso', $d->iddisciplinaaluno)}}" class="btn btn-primary btn-block"><b>Permitir acesso</b></a>
                <a href="{{action('DisciplinaController@negarcesso', $d->iddisciplinaaluno)}}" class="btn btn-danger btn-block"><b>Negar acesso</b></a>
              </div>
              <!-- /.box-body -->
            </div>

            </div>
          @endforeach
        @endif
@endsection
