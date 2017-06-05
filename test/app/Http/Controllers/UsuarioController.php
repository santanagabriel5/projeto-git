<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Input;
use Request;


class UsuarioController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

     public function __construct()

   {
     $this->middleware('auth',
     ['only' => ['hello']]);


   }


    public function test()
    {
        return view('telas.test');
    }

    public function disciplina()
    {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();

      if($user['professor']==0) {
        return view('telas.alunoenxerido');
    }else {
      return view('disciplina.lista');
    }
      }
      public function lista()  {

//        $user = app('Illuminate\Contracts\Auth\Guard')->user();
//
  //      if($user['professor']==0) {
    //      $perfil = User::all();
      //    return view('perfil(aluno).listagem')->with('user', $perfil);
        //}else {

          //$posts = Posts::all();
          //$perfil = User::where('professor', '=', $user['id'])->get();
            //return view('perfil.listagem')->with('user', $perfil);
        //    $user = Auth::user();
          //  $user->name = Request::input('name');
          //  $user->email = Request::input('email');
            //$user->save();
            //return view('perfil.listagem');
        }
      }
