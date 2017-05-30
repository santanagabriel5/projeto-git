<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Uploads;
use Illuminate\Http\File;


use Illuminate\Support\Facades\Input;



class UploadController extends Controller
{

  public function uploaddearquivo()  {

    $upload = new Uploads ();
    $arquivo = request()->file('avatar');

    $url =Storage::disk('public')->put('avatar', $arquivo);

    $contents = Storage::get('public/'.$url);


    $upload->nomeantigo =  $arquivo->getClientOriginalName();
    $upload->novonome = substr($url, strrpos($url, '/') + 1);
    $upload->caminho = $url;
    $upload->ligacao = 1;
    $upload->post=0;
    $upload->save();










    return (view ('telas.imagem')->with("url",$url));

    }

    public function tela()  {

      return view('telas.test');



      }
    //
}
