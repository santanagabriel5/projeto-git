@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    Você está Logado
                    <br><br><a  href="{{action('DisciplinaController@lista')}}">
                          Disciplinas
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
