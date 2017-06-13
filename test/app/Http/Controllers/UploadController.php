<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Uploads;
use Illuminate\Http\File;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{

  public function uploaddearquivo(UploadRequest $request)  {

    $nomes=array();
    $i=0;
    $retorno = array();
    $upload = new Uploads ();

        foreach ($request->arquivo as $item) {
          $url =Storage::disk('public')->put('uploads', $item);
          $upload->nomeantigo =  $item->getClientOriginalName();
          $upload->novonome = substr($url, strrpos($url, '/') + 1);
          $upload->post=0;
          $upload->save();
          $array[$i]=$url;
          $nomes[$i] = $item->getClientOriginalName();
          $i++;



        }

    return (view ('telas.imagem')->with("nomes",$nomes)->with("array",$array));

    }

    public function tela()  {

      return view('telas.test');



      }
}
