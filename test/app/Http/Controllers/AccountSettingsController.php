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

    public function lista()  {
      $user = app('Illuminate\Contracts\Auth\Guard')->user();
        $user = User::where ('id', '=', $user['id'])->get();
        return view('perfil.listagem')->with('user', $user);

      }
public function updateAccount($id)
{
  $user = app('Illuminate\Contracts\Auth\Guard')->user();
      if($user->id == $id){
        $user = User::find($id);
         return view('perfil.atualizar',['u'=>$user]);

    }
    else{
        return "voce nao podera acessar isso";
}
    }
public function atualiza()
    {
    $user = Auth::user();

    $user->name = Request::input('name');
    $user->endereco = Request::input('endereco');
    $user->email = Request::input('email');

    if ( ! Request::input('password') == '')
    {
        $user->password = bcrypt(Request::input('password'));
    }
    $user->save();
    return redirect('/perfil');
    }
}
?>
