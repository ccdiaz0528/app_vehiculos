<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\todo;

class TodosController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'marca'=> 'required|max:20',
            'placa'=> 'required|unique:todos,placa|regex:/^[A-Z]{3}[0-9]{3}$/',
            'color'=> 'required|max:20',
            'modelo'=> 'required|regex:/^[0-9]{4}$/|integer',
            'fecha_de_compra'=> 'required|date|before_or_equal:today',
            'accidente'=> 'required',
        ],['placa.unique' => 'La placa ingresada ya se encuentra registrada.',
        'marca.required' => 'La marca es un campo obligatorio',
        'color.required' => 'El color es un campo obligatorio',
        'placa.required'=>'La placa es un campo obligatorio',
        'placa.regex' => 'El formato de la placa es incorrecto, debe ser 3 letras seguidas de 3 números',
        'modelo.required'=> 'El modelo es un campo obligatorio',
        'modelo.integer' => 'El campo modelo solo debe contener numeros',
        'modelo.regex' => 'El campo modelo esta incompleto',
        'fecha_de_compra.required' => 'La fecha de compra es un campo obligatorio',
        'fecha_de_compra.before_or_equal' => 'En el campo fecha de compra debes ingresar una fecha valida',
        'accidente.required' => '¿Tuvo un accidente? Es un campo obligatorio']);

        $todo = new Todo;
        $todo -> marca = $request->marca;
        $todo -> placa = $request->placa;
        $todo -> color = $request->color;
        $todo -> modelo = $request->modelo;
        $todo -> fecha_de_compra = $request->fecha_de_compra;
        $todo -> accidente = $request->accidente;
        $todo ->save();
        
        return redirect()->route('todos')->with('success', 'Registro creado con exito');
    }

    public function index(){
        $todos = Todo::all();
        return view ('todos.index',['todos' => $todos]);
    }

    public function log(Request $request){
        $search = $request->input('search');

        $todos = Todo::when($search, function ($query, $search) {
            return $query->where('marca', 'like', "%$search%")
                        ->orWhere('placa', 'like', "%$search%")
                        ->orWhere('modelo', 'like', "%$search%")
                        ->orWhere('color', 'like', "%$search%");
        })->paginate(5);
    
        return view('todos.log', ['todos' => $todos, 'search' => $search]);
        
    }


    public function show($id){
        $todo = Todo::find($id);
        return view ('todos.show',['todo' => $todo]);
    }

    public function update(Request $request, $id){

        $request->validate([
            'marca' => 'required|max:20',
            'placa' => 'required|unique:todos,placa,' . $id . '|regex:/^[A-Z]{3}[0-9]{3}$/',  // Excluir la placa actual del registro que se está actualizando
            'color' => 'required|max:20',
            'modelo' => 'required|regex:/^[0-9]{4}$/|integer',
            'fecha_de_compra' => 'required|date|before_or_equal:today',
            'accidente' => 'required',
            ],['placa.unique' => 'La placa ingresada ya se encuentra registrada.',
            'marca.required' => 'La marca es un campo obligatorio',
            'color.required' => 'El color es un campo obligatorio',
            'placa.required'=>'La placa es un campo obligatorio',
            'placa.regex' => 'El formato de la placa es incorrecto, debe ser 3 letras seguidas de 3 números',
            'modelo.required'=> 'El modelo es un campo obligatorio',
            'modelo.integer' => 'El campo modelo solo debe contener numeros',
            'modelo.regex' => 'El campo modelo esta incompleto',
            'fecha_de_compra.required' => 'La fecha de compra es un campo obligatorio',
            'fecha_de_compra.before_or_equal' => 'En el campo fecha de compra debes ingresar una fecha valida',
            'accidente.required' => '¿Tuvo un accidente? Es un campo obligatorio']);

        $todo = Todo::find($id);
        $todo ->marca =$request->marca;
        $todo ->placa =$request->placa;
        $todo ->color =$request->color;
        $todo ->modelo =$request->modelo;
        $todo ->fecha_de_compra =$request->fecha_de_compra;
        $todo ->accidente =$request->accidente;
        $todo -> save();
        //return view ('todos.index',['success' => 'Tarea Actualizada!']);
        return redirect()->route('todos')->with('success','Registro Actualizado!');

    }
    
    public function destroy($id){
        $todo = Todo::find($id);
        $todo -> delete();
        return redirect()->route('todos')->with('success','El registro ha sido eliminado!');
    }
}
