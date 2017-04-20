@extends('layout/principal')

@section('conteudo')

      <h1>Listagem de Disciplina</h1>
      @if(empty($alunos))
        <div class="alert alert-danger">
            Nenhum aluno pendente
        </div>
      @else
        <table class="table table-striped table-bordered table-hover">
          @foreach ($alunos as $d)
            <tr>
              <td>{{$d->name}}</td><td> <a href="{{action('DisciplinaController@permitiracesso', $d->iddisciplinaaluno)}}">Permitir acesso</a></td><td><a href="{{action('DisciplinaController@negarcesso', $d->iddisciplinaaluno)}}">Negar acesso</a></td>
          @endforeach
        </table>
      @endif


@stop
