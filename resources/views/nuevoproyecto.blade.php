@extends('templates.plantilla')

@section('titulo', 'Nuevo Proyecto')

@section('contenido')

    <div class="main-container">
        <form action="">
            <input type="text" name="nombre" id="nombre">
            <input type="text" name="docente" id="docente">
            <select name="periodo" id="periodo">
                <option value="2021-2022N">2021-2022N</option>
                <option value="2021-2022P">2021-2022P</option>
            </select>
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
        </form>
        <a href="#"><button class="btn btn-primary" type="button">Agregar Vacantes</button></a>
        <a href="#"><button class="btn btn-primary" type="button">Agregar Departamentos</button></a>
    </div>
    <div class="table-container">
        <table class="table table-light table-bordered">
            <tbody>
                <tr>
                    <th width="20%" class="text-center">--</th>
                    <th width="15%" class="text-center">--</th>
                    <th width="15%" class="text-center">--</th>
                    <th width="15%" class="text-center">--</th>
                    <th width="15%" class="text-center">--</th>
                    <th width="15%" class="text-center">--</th>
                </tr>
                <tr>
                    <td width="20%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <th width="15%" class="text-center"></th>
                </tr>
                <tr>
                    <td width="20%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <th width="15%" class="text-center"></th>
                </tr>
                <tr>
                    <td width="20%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <th width="15%" class="text-center"></th>
                </tr>
                <tr>
                    <td width="20%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <td width="15%" class="text-center"></td>
                    <th width="15%" class="text-center"></th>
                </tr>
                
                
            </tbody>
        </table>
    </div>

@endsection