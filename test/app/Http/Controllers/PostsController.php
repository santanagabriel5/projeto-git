<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Posts;
use App\DisciplinaController;
use App\Disciplina;



class PostsController extends Controller
{

  /*public function __construct(){
  $this->middleware('auth',
  ['only' => ['adiciona', 'remove']]);

}*/
/*
public function lista($id)  {


    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
      $posts = Posts::where('idDisciplina', '==', $id)->get();
    //  $posts = Posts::all();

    $disciplina = Disciplina::find($id);
        return view('disciplina.detalhes',['id'=>$id,'posts'=> $posts,'d'=> $disciplina ]);
    }

  }
*/
  public function mostra($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
      $posts = Posts::find($id);
      if(empty($posts)) {
      return "Esse post não existe";
      }
      return view('posts.detalhes')->with('po', $posts);
    }

  }

  public function novo($idDisciplina)  {

    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
          return view('posts.formulario',['idDisciplina' => $idDisciplina]);
    }
  }

  public function adiciona($idDisciplina)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
      Posts::create(Request::all());
    return redirect()->action('DisciplinaController@mostra',$idDisciplina);
    }


  }

  public function atualizar($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
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
      return view('telas.alunoenxerido');
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
      return view('telas.alunoenxerido');
    }else {
      $posts = Posts::find($id);
      $posts->delete();
      return redirect()
      ->action('PostsController@lista');
    }


  }


  public function listaJson(){
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

      $posts = Posts::all();
    return response()->json($posts);
  }

}


 ?>
