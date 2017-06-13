@extends('.../layout/admin_template')
@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{{action('DisciplinaController@lista')}}"><i class="fa fa-dashboard"></i> Listagem</a></li>
    <li class="active">Detalhes disciplina</li>
    <li class="active">Detalhes seção</li>
    <li class="active">Detalhes post</li>
</ol>
@endsection
@section('content')

        <div class="col-lg-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $po->titulo or "nenhuma informacao contida" }}</h3>
              <div class="box-tools pull-right">
                <small> {{ $po->datacriacao or "nenhuma informacao contida" }}</small>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-3 col-sm-6 col-xs-12">
                {{ $po->descricao or "nenhuma informacao contida" }}

                @if (isset($links))
                <?php $i=0;?>

                  @foreach($links as $arquivo)
                  <br>
                  <a href="/storage/{{$arquivo}}" download='{{$nomes[$i]}}'>Baixar os arquivo {{$nomes[$i]}}</a><br>
                  <?php $i++; ?>
                  @endforeach
                @endif

              </div>
              <br><br>
              <h5 class="box-title">Comentarios</h5>
              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                <div class="box-body chat" id="chat-box" style="overflow: hidden; width: auto; height: auto;">
              <!-- mostra de comentários -->
                @foreach ($comentarios as $c)
              <div class="item">
                <img src="../dist/img/avatar5.png" alt="user image" class="online">
                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-calendar-o"></i> {{$c->datacriacao}} <i class="fa fa-clock-o"></i> {{$c->hora}}</small>
                    {{$c->nome}}
                  </a>
                  {{$c->conteudo}}
                </p>
                <!-- /.mostra de comentários -->
              </div>
                @endforeach
              <!-- /.item -->
                  <div class="box-footer">
                    <div class="input-group">
                      <?php     $user = app('Illuminate\Contracts\Auth\Guard')->user();?>
                      <form action="{{action('PostsController@AdicionarComentario', $po->id)}}" method="post">
                        <div class="form-group">
                        <input type="hidden"  name="_token" value="{{{ csrf_token() }}}" />
                          <input type="hidden"  name="datacriacao" value= {{date("Y-m-d H:i:s")}} />
                          <input type="hidden"  name="hora" value= {{date("H:i:s")}} />
                          <input type="hidden"  name="post_id" value= {{$po->id}} />
                          <input type="hidden"  name="nome" value= {{$user['name']}} />
                          <textarea rows="2" cols="200"  name="conteudo" class="form-control" placeholder="Digite seu comentário..."/></textarea>
                        </div>
                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 184.911px;"></div>
                <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>

@endsection
