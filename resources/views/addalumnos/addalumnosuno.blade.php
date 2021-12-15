@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<section>
        <div class="main-container">
            <div>
                <form action="http://localhost/proyecto/public/busquedaalumnos" method= "GET">
                  
                  
                    <select name="carrera" id="carrera">
                        <option selected='selected' value= 'vacio'>Carrera</option>
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
        </div>
    </section>
    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                       
                        <th width="15%" class="text-center">Matricula</th>
                        <th width="15%" class="text-center">Nombre</th>
                        <th width="15%" class="text-center">Carrera</th>
                        <th width="15%" class="text-center">Semestre</th>
                        <th width="15%" class="text-center">Creditos</th>
                        <th width="15%" class="text-center">Opciones</th>
                       
                    </tr>   
                </tbody>
            </table>
        </div>
    </section>
@endsection
