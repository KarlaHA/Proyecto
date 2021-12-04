@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

    <section>
        <div class="main-container">
            <div>
                <form action="http://localhost/proyecto/public/buscar" method= "GET">
                    <input type="text" name="nombre" id="nombre" placeholder = "Nombre">
                     <select name="estatus" id="estatus">
                        <option value=" "></option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                    <select name="carrera" id="carrera">
                        <option value=" "></option>
                        <option value="Ingenieria Bioquimica">Ingenieria Bioquimica</option>
                        <option value="Ingenieria en Industrias Alimentarias">Ingenieria en Industrias Alimentarias</option>
                        <option value="Ingenieria en Materiales">Ingenieria en Materiales</option>
                        <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Comptacionales</option>
                        <option value="Ingenieria Indstrial">Ingenieria Industrial</option>
                        <option value="Ingenieria Mecatronica">Ingenieria Mecatronica</option>
                        <option value="Licenciatura en Administracion">Licenciatura en Administracion</option>
                        <option value="Ingenieria Informatica">Ingenieria Informatica</option>
                        <option value="Ingenieria en Innovacion Agricola">Ingenieria en Innovacion Agricola</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Buscar">
                </form>
            </div>
            <a href="http://localhost/proyecto/public/registro"><button class="btn btn-primary" type="button">Nuevo</button></a>
            
        </div>
    </section>
    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                        <th width="20%" class="text-center">Nombre</th>
                        <th width="15%" class="text-center">Representante</th>
                        <th width="15%" class="text-center">Ciudad</th>
                        <th width="15%" class="text-center">Estado</th>
                        <th width="15%" class="text-center">Carrera</th>
                        <th width="15%" class="text-center">Estatus</th>
                    </tr>
                    @foreach ($registros as $registro)
                    <tr>
                        <td width="20%" class="text-center">{{$registro->nombre}}</td>
                        <td width="15%" class="text-center">{{$registro->representante}}</td>
                        <td width="15%" class="text-center">{{$registro->ciudad}}</td>
                        <td width="15%" class="text-center">{{$registro->estado}}</td>
                        <td width="15%" class="text-center">{{$registro->carrera}}</td>
                        <th width="15%" class="text-center">{{$registro->estatus}}</th>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </section>

@endsection
