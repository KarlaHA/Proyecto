@extends('templates.plantilla')

@section('titulo', 'Agregar departamento')

@section('contenido')

    <div class="btn-container">
        <form method= "POST" action="departamento/nuevo">
            @csrf
            
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
            

            <input type="text" name="nombre" id="nombre" placeholder = "Nombre del departamento"><br><br>
            <select name="empresa" id="empresa">
                <option selected disabled value="">Seleccione empresa</option>
                @foreach ($registros as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach
            </select><br><br>
        </form>
    </div>

@endsection