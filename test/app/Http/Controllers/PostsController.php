<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Posts;
use App\Comentarios;
use App\Secao;

class PostsController extends Controller
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

$posts = Posts::where('idSecao', '=', $id)->get();
    if($user['professor']==0) {
    
      $comentarios = Comentarios::where('post_id', '=', $id)->get();

      return view('posts(aluno).detalhes')->with('po', $posts)->with('c', $comentarios);

    }else {
      if(empty($posts)) {

      return "Esse post não existe";
      }
      $comentarios = Comentarios::where('post_id', '=', $id)->get();

      return view('posts.detalhes')->with('po', $posts)->with('c', $comentarios);
    }

  }

  public function novo($idSecao)  {

    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {
          return view('posts.formulario',['idSecao' => $idSecao]);
    }
  }

  public function adiciona($idSecao)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {
      Posts::create(Request::all());

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
        return view('posts.atualizar',['po'=>$posts,'p'=>$user]);
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
      return redirect()->action('PostsController@lista')->withInput(Request::only('titulo','atualiza'));
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
      ->action('SecaoController@lista');
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
    return redirect()->action('PostsController@mostra', $id);
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
