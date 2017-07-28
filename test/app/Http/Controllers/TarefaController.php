<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Posts;
use App\Comentarios;
use App\Secao;
use App\Uploads;
use Illuminate\Support\Facades\Storage;

class TarefaController extends Controller
{

  /*public function __construct(){
  $this->middleware('auth',
  ['only' => ['adiciona', 'remove']]);

}*/

  public function lista($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

      if($user['professor']==0) {
        return view('telas.alunoenxerido');
      }else {

       $posts = Posts::where('idSecao', '==', $id)->get();
     $secao = Secao::find($id);

          return view('secao.detalhes',['id'=>$id,'posts'=> $posts,'s'=> $id]);
      }
}

  public function mostra($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    $posts = Posts::find($id);
    $comentarios = Comentarios::where('post_id', '=', $id)->get();
    $arquivos = Uploads::where('post', '=', $id)->get();
    $links=array();
    $nomes=array();

    $i=0;

    if (isset($arquivos)) {
      foreach ($arquivos as $arquivo) {
        $links[$i] = $arquivo->novonome;
        $nomes[$i] = $arquivo->nomeantigo;
        $i++;
      }
    }


    if($user['professor']==0) {

      return view('tarefa(aluno).detalhes')->with('po', $posts)->with('comentarios', $comentarios)->with('links',$links)->with('nomes',$nomes);


    }else {
      if(empty($posts)) {

      return "Esse post não existe";
      }
      $comentarios = Comentarios::where('post_id', '=', $id)->get();

      return view('tarefa.detalhes')->with('po', $posts)->with('comentarios', $comentarios)->with('links',$links)->with('nomes',$nomes);
    }

  }

  public function novo($idSecao)  {

    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {
          return view('tarefa.formulario',['idSecao' => $idSecao]);
    }
  }

  public function adiciona($idSecao,Request $request)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {

      $params = Request::all();

      $post = new Posts;
      $post->titulo = $params['titulo'];
      $post->descricao = $params['descricao'];
      $post->datacriacao = $params['datacriacao'];
      $post->tarefa = $params['tarefa'];
      $post->data_entrega = $params['data_entrega'];
      $post->hora_entrega = $params['hora_entrega'];
      $post->idSecao = $params['idSecao'];
      $post->save();



      //Posts::create(Request::all());


      $i=0;


          foreach ($params['arquivo'] as $item) {
            $upload = new Uploads ();

            $url =Storage::disk('public')->put('arquivos', $item);
            $upload->nomeantigo =  $item->getClientOriginalName();
            $upload->novonome = $url;
            $upload->post=$post->id;
            $upload->user=$user['id'];
            $upload->save();
            $array[$i]=$url;
            $nomes[$i] = $item->getClientOriginalName();
            $i++;

          }

    return redirect()->action('SecaoController@mostra', $idSecao);
    }


  }

  public function atualizar($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();
  //  $posts = Posts::find($id);
   //$posts = Posts::where('idSecao', '=', $id)->get();
    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {
  $posts = Posts::find($id);
        if(empty($posts)) {
        return "Esse post não existe";
        }
        return view('tarefa.atualizar',['po'=>$posts,'p'=>$user]);
    }
  }

  public function atualiza()  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {
      $params = Request::all();
      $posts = new Posts();
      $posts = Posts::find($params['id']);
      $posts->titulo = $params['titulo'];
      $posts->descricao = $params['descricao'];

      $posts->save();
      return redirect()->action('TarefaController@lista')->withInput(Request::only('titulo','atualiza'));
    }
  }

  public function remove($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {
      $posts = Posts::find($id);
      $posts->delete();
      return redirect()
      ->action('SecaoController@lista', $posts->idSecao);
    }

  }

  public function listaJson(){
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

      $posts = Posts::all();
    return response()->json($posts);
  }

  public function AdicionarComentario($id){

    Comentarios::create(Request::all());
    // $comentario = new comentarios;
    // $comentario->post_id = Input::get('post_id');
    // $comentario->nome = Input::get('nome');
    // $comentario->conteudo = Input::get('conteudo');
    // $comentario->save();
    return redirect()->action('TarefaController@mostra', $id);
  }

  //TEST DE UP DE ARQUIVO

  public function getImage()
  {
      return view('telas.test');
  }
  /**
  * Manage Post Request
  *
  * @return void
  */
  public function postImage(Request $request)
  {
      $this->validate($request, [
          'image_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
      ]);
      $imageName = time().'.'.$request->image_file->getClientOriginalExtension();
      $request->image_file->move(public_path('images'), $imageName);
      return back()
          ->with('success','You have successfully upload images.')
          ->with('image',$imageName);
  }

  }

 ?>
