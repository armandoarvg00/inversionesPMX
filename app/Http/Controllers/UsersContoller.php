<?php

namespace App\Http\Controllers;
use App\Models\User;
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
        $user = user::findOrFail($request->id);
        $user->name= $request->name;
        $user->lastname= $request->lastname;
        $user->email =$request->username;
        $user->username =$request->lastname;
        $user->save();
        return $user;
        //return view('configuracion.aseguradoras.aseguradoras', compact('aseguradoras'));
    }
}
