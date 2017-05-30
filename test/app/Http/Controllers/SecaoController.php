<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Disciplina;
use App\Secao;
use App\Posts;
use App\DisciplinaAluno;
use App\Http\Requests\DisciplinasRequest;
use App\Comentarios;

class SecaoController extends Controller
{
  public function lista()  {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();


      if($user['professor']==0) {

        return view('disciplinaaluno.detalhes(aluno)',['id'=>$id,'secao'=> $secao,'d'=> $disciplina ]);
      }else {
      //  $posts = Posts::all();
      //$disciplina = Disciplina::find($id);
      return redirect()
      ->action('DisciplinaController@mostra',['id'=>$id,'secao'=> $secao,'d'=> $disciplina ]);

      //$secao = Secao::where('idDisciplina', '=', $id)->get();
//return view('disciplina',['id'=>$id,'secao'=> $secao,'d'=> $disciplina ]);
      }

    }


    public function mostra($id)  {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();
      $secao = Secao::find($id);

      if($user['professor']==0) {
        $posts = Posts::where('idSecao', '=', $id)->get();
    //    $comentarios = comentarios::where('post_id', '==', $posts->$id)->get();
        return view('secao(aluno).detalhes(aluno)')->with('posts', $posts)->with('se',$secao);
      }else {
        if(empty($secao)) {
        return "Essa seção nao existe";
        }

        $posts = Posts::where('idSecao', '=', $id)->get();
    //    $posts = Posts::all();
        return view('secao.detalhes',['posts'=> $posts,'se'=> $secao ]);
      }

    }


    public function novo($idDisciplina)  {

      $user = app('Illuminate\Contracts\Auth\Guard')->user();

      if($user['professor']==0) {
        return view('telas.mensagem');
      }else {
            return view('secao.formulario',['idDisciplina' => $idDisciplina]);
      }
    }

    public function adiciona($idDisciplina)  {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();

      if($user['professor']==0) {
        return view('telas.mensagem');
      }else {
        Secao::create(Request::all());

      return redirect()->action('DisciplinaController@mostra', $idDisciplina);
      }

    }
    public function atualizar($id)  {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();

      if($user['professor']==0) {
        return view('telas.mensagem');
      }else {
        $secao = Secao::find($id);
          if(empty($secao)) {
          return "Essa secão não existe";
          }
          return view('secao.atualizar',['se'=>$secao,'s'=>$user]);
      }
    }

    public function atualiza($id)  {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();

      if($user['professor']==0) {
        return view('telas.mensagem');
      }else {
        $params = Request::all();
        $secao = new Secao();
        $secao = Secao::find($params['id']);
        $secao->titulo = $params['titulo'];

        $secao->save();

       return redirect()->action('DisciplinaController@mostra', $id);
      }
    }

    public function remove($id)  {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();

      if($user['professor']==0) {
        return view('telas.mensagem');
      }else {
        $secao = Secao::find($id);
        $disciplina=Disciplina::find($secao['idDisciplina']);
        $secao->delete();
        return redirect()
        ->action('DisciplinaController@mostra' ,$disciplina['id']);
      }


    }

    public function listaJson(){
      $user = app('Illuminate\Contracts\Auth\Guard')->user();

        $secao = Secao::all();
      return response()->json($secao);
    }

  }
  ?>
