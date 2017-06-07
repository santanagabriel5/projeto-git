<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\AccountSettings;
use Input;
use Request;
use Auth;
use App\User;
use App\Http\Requests\UserRequest;



class AccountSettingsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
//    public function index()
  //  {
    //    return view('AccountSettings/index');
  //  }
    public function lista()  {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();
        $user = User::where ('id', '=', $user['id'])->get();
        return view('perfil.listagem')->with('user', $user);

      }


public function updateAccount($id)
{
  $user = app('Illuminate\Contracts\Auth\Guard')->user();
    $user = User::find($id);
      if(empty($user)){
      return "voce nao podera acessar isso";
    }
    else{
       return view('perfil.atualizar',['u'=>$user]);
}
    }

public function atualiza(updateAccount $request)  {
 $user = app('Illuminate\Contracts\Auth\Guard')->user();
 $user = Auth::user();
 $user->name = Request::input('name');
 $user->endereco = Request::input('endereco');
 $user->email = Request::input('email');

 if ( ! Request::input('password') == '')
 {
   $user->password = bcrypt(Request::input('password'));
 }

$user->save();
return Redirect::to('/perfil');

  // $paramss = Request::all();
  /* $user = new User();
   $user = User::find($paramss['id']);
   $user->name = $paramss['name'];
   $user->endereco = $paramss['endereco'];
    $user->email = $paramss['email'];
    $user->password = $paramss['password'];


  $user->save();

   return redirect()->action('AccountSettingsController@lista')->withInput(Request::only('titulo','atualiza'));
   */
  }



}


?>
