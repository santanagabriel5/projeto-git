@extends('layout/principal')

@section('conteudo')

      <h1>Listagem de Disciplina</h1>
      @if(empty($disciplina))
        <div class="alert alert-danger">
          Você não tem nenhuma disciplina cadastrada
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
                <a href="{{action('DisciplinaController@remove', $d->id)}}">
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
              </td>
              <td>
                <a href="{{action('DisciplinaController@atualizar', $d->id)}}">
                  <span class="glyphicon glyphicon-pencil"></span>
                </a>
              </td>
            </tr>
          @endforeach
        </table>
      @endif


@stop
