<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Disciplina;
use App\Posts;
use App\DisciplinaAluno;
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
      $disciplina = Disciplina::all();
      return view('disciplinaaluno.listagem')->with('disciplina', $disciplina);
    }else {

      //$posts = Posts::all();
      $disciplina = Disciplina::where('codProfessor', '=', $user['id'])->get();
        return view('disciplina.listagem')->with('disciplina', $disciplina);
    }
  }



//teste comit atom
  public function mostra($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    $disciplina = Disciplina::find($id);

    if($user['professor']==0) {


      $DisciplinaAluno = DisciplinaAluno::where('idDisciplina', '=', $id , 'and' , 'IdAluno', '=',$user['id'] )->get();


      if (isset($DisciplinaAluno[0]) == true) {

      if ($DisciplinaAluno['0']["Acesso"]==0) {
        return "O professor ainda nao autorizou a sua inscricao";
      }else {
        $posts = Posts::where('idDisciplina', '=', $id)->get();

        return view('disciplinaaluno.detalhes(aluno)',['posts'=> $posts,'d'=> $disciplina ]);
      }

    }else {
      return "Voce ainda nao se cadastrou nesse materia";
    }



      //if aluno matriculado na disciplina {
        //return view('disciplinaaluno.detalhes',['posts'=> $posts,'d'=> $disciplina ]); //}
      //else
       // return view('disciplinaaluno.matricular');
    }else {
      if(empty($disciplina)) {
      return "Essa disciplina não existe";
      }
      $posts = Posts::all();

      $posts = Posts::where('idDisciplina', '=', $id)->get();

      //$posts = Posts::all();

      return view('disciplina.detalhes',['posts'=> $posts,'d'=> $disciplina ]);
    }

  }

  public function novo()  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {
          return view('disciplina.formulario')->with('p', $user);;
    }
  }

  public function adiciona()  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {
      Disciplina::create(Request::all());

      return redirect()->action('DisciplinaController@lista')->with('p', $user)
      ->withInput(Request::only('titulo','adiciona'));
    }


  }

  public function atualizar($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
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
      return view('telas.mensagem');
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
      return view('telas.mensagem');
    }else {
      $disciplina = Disciplina::find($id);
      $disciplina->delete();
      return redirect()
      ->action('DisciplinaController@lista');
    }


  }

  public function matricula($id)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();
    $disciplina = Disciplina::find($id);

    if($user['professor']==0) {
      return view('disciplinaaluno.matricular',['p' => $user, 'd' =>$disciplina ]);
    }else {

    /*  COMO ASSIM ? >>>>>*/return view('disciplina.formulario' ,['p' => $user, 'd' =>$disciplina ]);
    }
  }

  public function matricular($iddisciplina)  {

    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    DisciplinaAluno::create(['IdDisciplina' => $iddisciplina, 'IdAluno' => $user['id'], 'Acesso' => 0]);

    $disciplina = Disciplina::all();

    return redirect()->action('DisciplinaController@lista')->with('p', $user);



  }


//a função abaixo é só pra teste


  public function listaralunospendentes($idmateria){

  $idDisciplinas =  DB::select(DB::raw("SELECT Users.name, DisciplinaAluno.Id iddisciplinaaluno,DisciplinaAluno.IdDisciplina
FROM Users , DisciplinaAluno
WHERE DisciplinaAluno.idDisciplina = $idmateria
AND Users.id = DisciplinaAluno.IdAluno AND DisciplinaAluno.acesso = 0 "));



  //  $Alunos = DisciplinaAluno::where('idDisciplina', '=', $idmateria , 'and' , 'Acesso', '=', 0 )->get();

    return view('disciplina.alunospendentes' , ['alunos' =>$idDisciplinas]);

  }

  public function permitiracesso($idDisciplinaAluno)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {

      $DisciplinaAluno = DisciplinaAluno::find($idDisciplinaAluno);

    //$DisciplinaAluno->Acesso = 1;

     //$DisciplinaAluno->save();

     DB::table('disciplinaaluno')
            ->where('id', $idDisciplinaAluno)
            ->update(['Acesso' => 1]);

      return  redirect()->action('DisciplinaController@listaralunospendentes' , ['idmateria' =>$DisciplinaAluno->IdDisciplina]);
    }


  }

  public function negarcesso($idDisciplinaAluno)  {
    $user = app('Illuminate\Contracts\Auth\Guard')->user();

    if($user['professor']==0) {
      return view('telas.mensagem');
    }else {

      $DisciplinaAluno = DisciplinaAluno::find($idDisciplinaAluno);

      DB::table('disciplinaaluno')->where('Id', '=', $idDisciplinaAluno)->delete();



      return  redirect()->action('DisciplinaController@listaralunospendentes' , ['idmateria' =>$DisciplinaAluno->IdDisciplina]);
    }


  }


}
 ?>
