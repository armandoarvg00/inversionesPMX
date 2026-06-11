<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\user_metodopago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsersContoller extends Controller
{
    public function index(){
        $usuarios = User::select('*')->paginate(env('PAGINACION'));
        return view('seguridad.usuarios.usuarios', compact('usuarios',));
    }
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
                $user =new User();
                $user->name =$request->name;
                $user->lastname =$request->lastname;
                $user->username =$request->username;
                $user->telephone =$request->telephone;
                $user->email =$request->username;
                $user->imagen ='logo.jpg';
                $user->password =bcrypt($request->password);
                $user->status_id =1;
                $user->assignRole($request->rol);
                $user->save();
            DB::commit();
            return response()->json(['message' => '200']);
        }catch(\Exception $e) {
            DB::rollBack();
            /*
                $log =  new LogController;
                $log->user_id = Auth::id();
                $log->accion = 'error';
                $log->guardar();
                DB::commit();
            */
            return response()->json(['message' => $e, 'Error'=>$request->modelo]);
        }

    }
    public function show($id)
    {
        $usuario = user::join('rel_users_statususers', 'rel_users_statususers.user_id', '=', 'users.id')
        ->select('users.*','rel_users_statususers.id as rel_users_statususers_id','rel_users_statususers.contactos','rel_users_statususers.contactos','rel_users_statususers.actual')
        ->WHERE('users.id', '=', $id)->first();
        return $usuario;
    }
    public function update(Request $request){
        //dd($request);


        $user = user::findOrFail($request->id);
        if($request->city == 0 and $request->usuario ==2 ){ // esta Activado vamos a inactivarlo
            $user->about =  $request->password; // la contra actual la respaldarmos en el campo about  
            $user->password =  $request->about; // la contra actual pasa a ser el que agrego el usuario 
            $user->city= 1;
            
        }elseif($request->city != 0 and $request->usuario ==2 ){ // esta inactivo vamos a Activarlo
            $user->password=  $request->password; // la contra actual pasa a ser la respaldada 
            $user->about=  0;
            $user->city= 0;
        }
        $user->postal= $request->postal;
        $user->save();
        if($request->usuario ==1 ){
            $user_metodopago =new user_metodopago();
            $user_metodopago->id_user =$request->id;
            $user_metodopago->monto =$request->postal;
            $user_metodopago->save();
        }
        return view('pages.user-profile');
        //return $user;
        //return view('configuracion.aseguradoras.aseguradoras', compact('aseguradoras'));
    }
}

