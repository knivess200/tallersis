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
    	$this->middleware('isadmin');
    }
    public function getUsers(){
    	$users = User::orderBy('id', 'Desc')->get();
    	$data = ['users' => $users];
    	return view('admin.users.home', $data); 
    }


    public function getUsersEdit($id){
     	$users = User::find($id);
     	$data = ['users' => $users];
     	return view('admin.users.edit', $data);
     }

     public function postUsersEdit(Request $request, $id){
     	$rules = [
     		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email|unique:App\User,email',
    		'password' => 'required|min:8',
    		'cpassword' => 'required|min:8|same:password'
     	];
     	$messages = [
     		'name.required' => 'Su nombre es requerido.',
    		'lastname.required' => 'Su apellido es requerido.',
    		'email.required' => 'Su correo electrónico es requerido.',
    		'email.email' => 'El formato de su correo electrónico es invalido.',
    		'email.unique' => 'Ya existe un usuario registrado con este correo electrónico.',
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
    		$c->email = $request->input('email');
    		$c->password = Hash::make($request->input('password'));
    		if($c->save()):
    			return back()->with('message', 'Guardado con exito')->with('typealert', 'success');
    		endif;
    	endif;
     }

     public function getUsersDelete($id){
     	$c = User::find($id);
     	if($c->delete()):
    			return back()->with('message', 'Borrado con exito')->with('typealert', 'success');
    		endif;
     }
}
