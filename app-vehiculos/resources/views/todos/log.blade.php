@extends('app')
@section('content')
<!--Parte de los registros-->

<div class="container w-40 border p-4 mt-4" >
    <H1>Registros</H1>
    <hr>

    <form action="{{route ('todos-log')}}" method="GET" class="mb-4">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Buscar por marca, placa, color y modelo" value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </div>
        </div>
    </form>

    @foreach ($todos as $todo)
    <div class="row py-1">
        <div class="col-md-9 d-flex align-items-center">
            <a class="col-2" ><strong>Marca:<br> </strong>{{$todo -> marca }} </a>
            <a class="col-2"><strong>Placa:<br></strong>{{$todo -> placa }} </a> 
            <a class="col-2"><strong>Color:<br></strong>{{$todo -> color }} </a> 
            <a class="col-2"><strong>Modelo:<br></strong>{{$todo -> modelo }} </a> 
            <a class="col-2"><strong>Fecha de compra: <br> </strong>{{$todo -> fecha_de_compra }} </a> 
            <a class="col-2"><strong>¿Tuvo un accidente?: <br> </strong>{{$todo->accidente == 1 ? 'Sí' : 'No' }} </a>
            <a class="col-md-2"><strong>Actualizado:</strong><br>{{ $todo->updated_at->format('d/m/Y H:i') }}</a>

        </div>

        <div class="col-md-3 d flex justify-content-end text-end">
                <form action="{{route('todos-destroy',[$todo->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
                <div>
                    <form action="{{route('todos-edit',[$todo->id]) }}" method="GET">
                        <button class="btn btn-primary btn-sm">Editar</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
    <div class="d-flex justify-content-center mt-3">
        {{ $todos->appends(['search' => request('search')])->links('pagination::bootstrap-4') }}
    </div>
    
</div>
@endsection