@extends('templates.plantilla')

@section('titulo', 'Nuevo Registro')

@section('contenido')


    <div class="btn-container">
        <form method= "POST" action="http://localhost/proyecto/public/registro/nuevo">
            @csrf
            
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
            

            <input type="text" name="nombre" id="nombre"><br><br>
            <input type="text" name="representante" id="representante"><br><br>
            <select name="estado" id="estado">
                <option value="Campeche"> Campeche</option>
                <option value=""> ccc </option>
                <option value=""> Opcion 3 </option>
                <option value=""> Opcion 4 </option>
                <option value=""> Opcion 5 </option>
            </select><br><br>
            <select name="ciudad" id="ciudad">
                <option value="Calkini"> Calkiní </option>
                <option value=""> Opcion 2 </option>
                <option value=""> Opcion 3 </option>
                <option value=""> Opcion 4 </option>
                <option value=""> Opcion 5 </option>
            </select><br><br>
            <select name="estatus" id="estatus">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select><br><br>
            <select name="carrera" id="carrera">
                <option value="Ingenieria Bioquimica">Ingenieria Bioquimica</option>
                <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Computacionales</option>
                <option value="Ingenieria Informatica">Ingenieria Informatica</option>
            </select><br><br>
            
        </form>
        <button class="btn btn-primary" type="button">Agregar departamento</button>
        <a href="http://localhost/proyecto/public/vacantes"><button class="btn btn-primary" type="button">Vacantes</button></a><br><br>
        
    </div>

@endsection
