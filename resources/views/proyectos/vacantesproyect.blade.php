@extends('templates.plantilla')

@section('titulo', 'Agregar vacantes a empresas')

@section('contenido')

    <div class="main-container">
    <form method= "POST" action="/enviavacantep">
            @csrf
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
            <select name="carrera" id="carrera">
            <option selected='selected' disabled>Carrera</option>
            <option value="Ingenieria Bioquimica">Ingenieria Bioquimica</option>
                        <option value="Ingenieria en Industrias Alimentarias">Ingenieria en Industrias Alimentarias</option>
                        <option value="Ingenieria en Materiales">Ingenieria en Materiales</option>
                        <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Comptacionales</option>
                        <option value="Ingenieria Indstrial">Ingenieria Industrial</option>
                        <option value="Ingenieria Mecatronica">Ingenieria Mecatronica</option>
                        <option value="Licenciatura en Administracion">Licenciatura en Administracion</option>
                        <option value="Ingenieria Informatica">Ingenieria Informatica</option>
                        <option value="Ingenieria en Innovacion Agricola">Ingenieria en Innovacion Agricola</option>
            </select><br></br>
            <input type="text" name="cantidad" id="cantidad" placeholder = "Vacantes"><br><br>
           
        </form>
    </div>

@endsection