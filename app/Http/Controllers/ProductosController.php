<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Exception;

class ProductosController extends Controller
{
    //
    public function index(){
        $productos = Productos::all();
        return $productos;
    }

    public function show(){
        $listado = $this -> index();
        return view('productos', ['productos'=>$listado]);
    }
    public function store(Request $request){
        try{
            $request -> validate([
                'nombre'=>'required',
                'descripcion'=>'required'
            ]);
            Productos::create([
                'nombre'=>$request->nombre,
                'descripcion'=>$request-> descripcion,
                'estado'=>true
            ]);
            return redirect('/productos');
        }
        catch(Exception $e){
            return response()->json(
                [
                    'msg' =>$e->getMessage()

                ]
            );
        }
    }

    public function updateProduct(Request $request){
        try{
            $request -> validate([
                'old'=>'required',
                'new' => 'required'
            ]);
            $new= $request -> new;
            $old = $request -> old;

            Productos::where('nombre', $old)
            ->update(['nombre'=>$new]);
            return redirect('/productos');
        }
        catch(Exception $e){
            return response()->json(
                [
                    'msg' =>$e->getMessage()

                ]
            );
        }
    }

    public function deletedProduct(Request $request){
        try{
            $request -> validate([
                'nombre'=>'required',
            ]);
            $name = $request ->nombre;
  
            Productos::where('nombre', $name)
            ->delete();
            return redirect('/productos');
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
