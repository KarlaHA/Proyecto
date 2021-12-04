@extends('templates.plantilla')

@section('titulo', 'Agregar vacantes a empresas')

@section('contenido')

    <div class="main-container">
        <form action="">
            <select name="periodo" id="periodo">
                <option value="2021-2022N">2021-2022N</option>
                <option value="2022-2023P">2022-2023P</option>
            </select><br></br>
            <select name="carrera" id="carrera">
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
            <select name="Departamento" id="Departamento">
                <option value="Ventas">Ventas</option>
                <option value="Sistemas">Sistemas</option>
                <option value="Atencion al cliente">Atencion al cliente</option>
            </select><br></br>
            <input type="text" name="vacantes" id="vacantes" placeholder = "Vacantes"><br></br>
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button><br></br>
        </form>
        <button class="btn btn-primary" type="button">Vacantes asignadas</button>
    </div>

@endsection