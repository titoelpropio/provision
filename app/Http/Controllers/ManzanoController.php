<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use App\Manzano;
use DB;
use Hash;

class ManzanoController extends Controller {

    public function __construct() {
//        $this->middleware('auth');
//        $this->middleware('admin');
//        $this->middleware('auth', ['only' => 'admin']);
    }

    function index() {
                $manzano=Manzano::paginate(9);

        return view('manzano.index',  compact('manzano'));
    }

    public function create() {
          $empresa=Empresa::paginate(9);

        return view('usuario.create', compact('empresa'));
    }

    public function store(Request $request) {
        if ($request->ajax()) {
           DB::table('mapa')->insert(['nombre' => $request['nombre'],'id_proyecto' => $request['id_proyecto']]);
           
            return response()->json($request);
             
        }         
            
            
    }

    public function edit($id) {

        $trabajador = User::find($id);
        $empresa = Empresa::where('id', $trabajador->id_empresa)->lists('nombre', 'id');

        return view('usuario.edit', ['user' => $trabajador], compact('empresa'));
    }

    public function update($id, UserUpdateRequest $request) {
        $user = User::find($id);
        $user->fill([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'id_empresa'=>$request->id_empresa
        ]);
        $user->save();
        Session::flash('message', 'Usuario Actualizado Correctamente');
        return Redirect::to('/usuario');
    }

    public function destroy($id) {

        $trabajador = User::find($id);
        $trabajador->delete();
        Session::flash('message', 'Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');
    }

}
