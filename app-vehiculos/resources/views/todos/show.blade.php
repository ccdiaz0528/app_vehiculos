@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4" >
        <form action="{{route ('todos-update', ['id'=> $todo->id ])}}" method="POST">
            @method ('PATCH')
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
                <input type="text" name="marca" class="form-control" value="{{$todo -> marca}}">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" name="placa" class="form-control" value="{{$todo -> placa}}" >
                <label for="color" class="form-label">Color</label>
                <input type="text" name="color" class="form-control" value="{{$todo -> color}}">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="{{$todo -> modelo}}">
                <label for="fecha_de_compra" class="form-label">Fecha de compra</label>
                <input type="date" name="fecha_de_compra" class="form-control" value="{{$todo -> fecha_de_compra}}">
                <label for="accidente" class="form-label">¿Tuvo un accidente?</label><br>
                <input type="radio" id="si" name="accidente" value="1" value="{{$todo -> accidente== 1 ? 'checked' : '' }}">
                <label for="si">Sí</label><br>
                <input type="radio" id="no" name="accidente" value="0" value="{{$todo -> accidente== 0 ? 'checked' : '' }}">
                <label for="no">No</label><br>
            </div>
                <button type="submit" class="btn btn-primary">Actualizar un registro de un vehiculo</button>
            </form>
    </div>
@endsection
