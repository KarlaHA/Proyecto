@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')
    
    <div class="main-container">
        <form method= "POST" action="nuevoasesor/guardar">
            @csrf
            
                <button class="btn btn-primary" 
                        name="btnAccion"
                        value="Guardar"
                        type="submit">Guardar</button>
            
            <input type="text" name="nombre" id="nombre" placeholder = "Nombre"><br><br>
            <select name="empresa" id="empresa">
                <option selected disabled>Seleccione empresa</option>
                @foreach ($list as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach
            </select><br><br>
            <input type="text" name="correo" id="correo" placeholder = "Correo"><br><br>
            <input type="text" name="telefono" id="telefono" placeholder = "Telefono"><br><br>
            <input type="text" name="cargo" id="cargo" placeholder = "Cargo"><br><br>
            
        </form>
    </div>
@endsection