@extends('templates.plantilla')

@section('titulo', 'Agregar vacantes a empresas')

@section('contenido')

    <div class="main-container">
        <form action="">
            <select name="periodo" id="periodo">
                <option value="2021-2022N">2021-2022N</option>
                <option value="2021-2022P">2021-2022P</option>
            </select>
            <select name="carrera" id="carrera">
                <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Computacionales</option>
                <option value="Ingenieria Bioquimica">Ingenieria Bioquimica</option>
                <option value="Ingenieria Informatica">Ingenieria Informatica</option>
            </select>
            <select name="Departamento" id="Departamento">
                <option value="Ventas">Ventas</option>
                <option value="Sistemas">Sistemas</option>
                <option value="Atencion al cliente">Atencion al cliente</option>
            </select>
            <input type="text" name="vacantes" id="vacantes">
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
        </form>
        <button class="btn btn-primary" type="button">Vacantes asignadas</button>
    </div>

@endsection