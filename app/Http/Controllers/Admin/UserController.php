<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator, Str;
use Hash , Auth;

use App\User; 



class UserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
        $this->middleware('user.status');
    	$this->middleware('isadmin');
    }
    public function getUsers($status){
        if($status == 'all'):
    	$users = User::orderBy('id', 'Desc')->paginate(2);
    else:
        $users = User::where('status', $status)->orderBy('id', 'Desc')->paginate(2);
    endif;
    	$data = ['users' => $users];
    	return view('admin.users.home', $data); 
    }


    public function getUsersEdit($id){
     	$u = User::findOrFail($id);
     	$data = ['u' => $u];
     	return view('admin.users.user_edit', $data);
     }

     public function postUserEdit(Request $request, $id){
     	$rules = [
     		'name' => 'required',
    		'lastname' => 'required',
    		'password' => 'required|min:8',
    		'cpassword' => 'required|min:8|same:password'
     	];
     	$messages = [
     		'name.required' => 'Su nombre es requerido.',
    		'lastname.required' => 'Su apellido es requerido.',
    		'password.required' => 'Por favor escriba una contraseña.',
    		'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
    		'cpassword.required' => 'Es necesario confirmar la contraseña.',
    		'cpassword.min' => 'La confirmación de la contrasela debe tener al menos 8 caracteres.',
    		'cpassword.same' => 'Las contraseñas no coinciden.'
     	];

     	$validator = Validator::make($request->all(), $rules, $messages);     	
    	if($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
    	else:
    		$c = User::find($id);
    		$c->name = $request->input('name');
    		$c->lastname = $request->input('lastname');    		
    		$c->password = Hash::make($request->input('password'));
    		if($c->save()):
    			return back()->with('message', 'Guardado con exito')->with('typealert', 'success');
    		endif;
    	endif;
     }

     public function getUserDelete($id){
     	$c = User::find($id);
     	if($c->delete()):
    			return back()->with('message', 'Borrado con exito')->with('typealert', 'success');
    		endif;
     }

     public function getUserBanned($id){

        $u = User::findOrFail($id);
        if($u->status == "100"):
            $u->status = "1";
            $msg= "Usuario activo nuevamente";
        else:
            $u->status = "100";
            $msg = "Usuario suspendido con exito";
        endif;

        if($u->save()):
            return back()->with('message', $msg)->with('typealert', 'success');
        endif;
     }
}
