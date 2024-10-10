@extends('app')
@section('content')
<!--Parte del formulario a llenar con los datos de los vehiculos-->
    <div class="container w-25 border p-4 mt-4" >
        <form action="{{route ('todos')}}" method="POST">
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success" >{{ session('success') }}</h6>
            @endif

            @error('marca')
                <h6 class="alert alert-danger" >{{ $message }}</h6>
            @enderror

            @error('placa')
                <h6 class="alert alert-danger" >{{ $message }}</h6>
            @enderror

            @error('color')
                <h6 class="alert alert-danger" >{{ $message }}</h6>
            @enderror

            @error('modelo')
                <h6 class="alert alert-danger" >{{ $message }}</h6>
            @enderror
            
            @error('fecha_de_compra')
                <h6 class="alert alert-danger" >{{ $message }}</h6>
            @enderror

            @error('accidente')
                <h6 class="alert alert-danger" >{{ $message }}</h6>
            @enderror

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" class="form-control" placeholder="Ingrese la marca de su vehiculo">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" name="placa" class="form-control" placeholder="Ingrese la plca de su vehiculo">
                <label for="color" class="form-label">Color</label>
                <input type="text" name="color" class="form-control" placeholder="Ingrese el color de su vehiculo">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" placeholder="Ingrese el modelo de su vehiculo">
                <label for="fecha_de_compra" class="form-label">Fecha de compra</label>
                <input type="date" name="fecha_de_compra" class="form-control">
                <label for="accidente" class="form-label">¿Tuvo un accidente?</label><br>
                <input type="radio" id="si" name="accidente" value="1">
                <label for="si">Sí</label><br>
                <input type="radio" id="no" name="accidente" value="0">
                <label for="no">No</label><br>
            </div>
                <button type="submit" class="btn btn-primary">Crear un registro de un vehiculo</button>
                <hr>
                <button type="reset" class="btn btn-primary">Limpiar campos</button>
        </form>
    </div>

<!--Parte de los registros-->
    <div class="container w-40 border p-4 mt-4" >
        <H1>Registros</H1>
        <hr>
        @foreach ($todos as $todo)
        <div class="row py-1">
            <div class="col-md-9 d-flex align-items-center">
                <a href="{{ route('todos-edit',['id' => $todo->id]) }}" class="col-md-2" ><strong>Marca:</strong>{{$todo -> marca }} </a>
                <a href="{{ route('todos-edit',['id' => $todo->id]) }}" class="col-md-2" ><strong>Placa:</strong>{{$todo -> placa }} </a> 
                <a href="{{ route('todos-edit',['id' => $todo->id]) }}" class="col-md-2" ><strong>Color:</strong>{{$todo -> color }} </a> 
                <a href="{{ route('todos-edit',['id' => $todo->id]) }}" class="col-md-2" ><strong>Modelo:</strong>{{$todo -> modelo }} </a> 
                <a href="{{ route('todos-edit',['id' => $todo->id]) }}" class="col-md-2" ><strong>Fecha de compra: <br> </strong>{{$todo -> fecha_de_compra }} </a> 
                <a href="{{ route('todos-edit',['id' => $todo->id]) }}" class="col-md-2" ><strong>¿Tuvo un accidente?: <br> </strong>{{$todo->accidente == 1 ? 'Sí' : 'No' }} </a>
            </div>
            <div class="col-md-3 d flex justify-content-end">
                    <form action="{{route('todos-destroy',[$todo->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
