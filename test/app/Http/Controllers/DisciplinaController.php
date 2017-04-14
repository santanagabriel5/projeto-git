<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Disciplina;
use App\Posts;
use App\Http\Requests\DisciplinasRequest;



class DisciplinaController extends Controller
{

  /*public function __construct(){
  $this->middleware('auth',
  ['only' => ['adiciona', 'remove']]);

}*/

  public function lista()  {

    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {

      //$posts = Posts::all();
      $disciplina = Disciplina::where('codProfessor', '=', $user['id'])->get();
        return view('disciplina.Listagem')->with('disciplina', $disciplina);
    }


  }

//teste comit atom
  public function mostra($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
      $disciplina = Disciplina::find($id);
      if(empty($disciplina)) {
      return "Essa disciplina não existe";
      }
      $posts = Posts::where('idDisciplina', '=', $id)->get();

      //$posts = Posts::all();

      return view('disciplina.detalhes',['posts'=> $posts,'d'=> $disciplina ]);
    }




  }

  public function novo()  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
          return view('disciplina.formulario')->with('p', $user);;
    }
  }

  public function adiciona()  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
      Disciplina::create(Request::all());

      return redirect()->action('DisciplinaController@lista')->with('p', $user)
      ->withInput(Request::only('titulo','adiciona'));
    }


  }

  public function atualizar($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
      $disciplina = Disciplina::find($id);
        if(empty($disciplina)) {
        return "Essa disciplina não existe";
        }
        return view('disciplina.atualizar',['d'=>$disciplina,'p'=>$user]);
    }



  }

  public function atualiza()  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
      $params = Request::all();
      $disciplina = new Disciplina();
      $disciplina = Disciplina::find($params['id']);

      $disciplina->titulo = $params['titulo'];
      $disciplina->cargah = $params['cargah'];
      $disciplina->inicio = $params['inicio'];
      $disciplina->fim = $params['fim'];

      $disciplina->save();
      return redirect()->action('DisciplinaController@lista')->withInput(Request::only('titulo','atualiza'));
    }


  }

  public function remove($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.alunoenxerido');
    }else {
      $disciplina = Disciplina::find($id);
      $disciplina->delete();
      return redirect()
      ->action('DisciplinaController@lista');
    }


  }


  public function listaJson(){
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

      $disciplina = Disciplina::all();
    return response()->json($disciplina);
  }

}


 ?>
