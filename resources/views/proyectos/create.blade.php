@extends('templates.plantilla')

@section('titulo', 'Nuevo Proyecto')

@section('contenido')


    <div class="btn-container">
        <form method= "POST" action="enviar">
            @csrf
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
            <input type="text" name="nombre" id="nombre" placeholder = "Nombre"><br><br>
            <input type="text" name="docente" id="docente" placeholder = "Docente"><br><br>
            <select name="periodo" id="periodo">
            <option selected='selected' disabled>Periodo</option>
                <option value="2019">2019</option>
                <option value="2021">2021</option>
            </select><br><br>
        </form>
        <div class="btn-container">
       
       
       
        
    </div>

@endsection