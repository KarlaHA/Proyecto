@extends('templates.plantilla')

@section('titulo', 'Lista proyectos')

@section('contenido')

    <div class="main-container">
        <form action="">
            <input type="text" name="nombre" id="nombre">
            <select name="carrera" id="carrera">
                <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Computacionales</option>
                <option value="Ingenieria Bioquimica">Ingenieria Bioquimica</option>
                <option value="Ingenieria Informatica">Ingenieria Informatica</option>
            </select>
            <input type="submit" class="btn btn-primary" value="Buscar">
        </form>
        <a href="http://localhost/proyecto/public/proyectosnuevo"><button class="btn btn-primary" type="button">Nuevo</button></a>

        
        

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