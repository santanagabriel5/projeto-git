<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


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


}
