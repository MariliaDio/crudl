<?php

namespace App\Http\Controllers;

use App\http\Requests\StoreUpdateUsuario;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::latest()->paginate(7);

        return view('usuarios.index', compact('usuarios'));
    }
    public function show(){

    }
    public function create(){

    }
    public function destroy($id){
        if(!$usuario = Usuario::find($id))
            return redirect()->route('usuarios.index');

        $usuario->delete($id);
        
        return redirect()
        ->route('usuarios.index')
        ->with('message', 'Deletado com sucesso!');
    }

    public function store(StoreUpdateUsuario $request){
        $data = $request->all();

        if($request->foto->isValid()){
        
           $nameFile = Str::of($request->nomec)->slug('-') . '.' .$request->foto->getClientOriginalExtension();

           $foto = $request->foto->storeAs('usuarios', $nameFile);
           $data['foto'] = $foto;
        }
       $usuario = Usuario::create($data);
        
       return redirect()
       ->back()
       ->with('message', 'Usuario cadastrado com sucesso!');
    }

    public function edit(){
        return view('usuarios.index', compact('usuarios'));
    }

    public function update(StoreUpdateUsuario $request, $id){
        if (!$usuario = Usuario::find($id)){
            return redirect()->back();
        }

        $usuario->update($request->all());

        return redirect()
        ->back()
        ->with('message', 'Usuario editado com sucesso!');
    }

    public function search(Request $request){
        $usuarios = Usuario::where('nomec', 'LIKE', "%{$request->search}%")
        ->orWhere('cpf', '=', $request->search)
        ->paginate(7);

        return view('usuarios.index', compact('usuarios'));
    }

}
