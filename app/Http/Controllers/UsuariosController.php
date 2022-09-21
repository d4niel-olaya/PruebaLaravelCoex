<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Exception;

class UsuariosController extends Controller
{
    //
    public function index(){
        $usuarios = Usuarios::all();
        return $usuarios;
    }

    public function show(){
        $response = $this->index();
        return view('inicio', ['usuarios'=>$response]);
    }

    public function store(Request $request){
        try{
            $request -> validate([
                'nombre'=>'required'
            ]);
            $img = 'https://ui-avatars.com/api/?name=';
            Usuarios::create([
                'nombre'=>$request->nombre,
                'foto'=>$img.str_replace($request->nombre, ' ', '+'),
                'estado'=>true
            ]);
            return redirect('/inicio');
        }
        catch(Exception $e){
            return response()->json(
                [
                    'msg' =>$e->getMessage()

                ]
            );
        }
    }

    public function updateUser(Request $request){
        try{
            $request -> validate([
                'OldName'=>'required',
                'NewName' => 'required'
            ]);
            $newName = $request -> NewName;
            $old = $request -> OldName;

            Usuarios::where('nombre', $old)
            ->update(['nombre'=>$newName]);
            return redirect('/inicio');
        }
        catch(Exception $e){
            return response()->json(
                [
                    'msg' =>$e->getMessage()

                ]
            );
        }
    }

    public function deletedUser(Request $request){
        try{
            $request -> validate([
                'nombre'=>'required',
            ]);
            $name = $request ->nombre;
  
            Usuarios::where('nombre', $name)
            ->delete();
            return redirect('/inicio');
        }
        catch(Exception $e){
            return response()->json(
                [
                    'msg' =>$e->getMessage()

                ]
            );
        }
    }

}
