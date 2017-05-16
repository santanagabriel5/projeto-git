<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@extends('layout/principal(aluno)')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@section('conteudo')

      <h1>Listagem de Disciplina</h1>
      @if(empty($disciplina))
        <div class="alert alert-danger">
          Não há nenhuma disciplina cadastrada.
        </div>
      @else
        <table class="table table-striped table-bordered table-hover">
          @foreach ($disciplina as $d)
            <tr>
              <td>{{$d->titulo}}</td>

              <td>
                <a href="{{action('DisciplinaController@mostra', $d->id)}}">
                  <span class="glyphicon glyphicon-search"></span>
                </a>
              </td>
              <td>
                <a href="{{action('DisciplinaController@matricula', $d->id)}}">
                  Matricular nessa disciplina
                </a>
              </td>
            </tr>
          @endforeach
        </table>
      @endif


@stop
