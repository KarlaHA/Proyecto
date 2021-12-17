
@extends('templates.plantilla')

@section('titulo', 'Proyectos')

@section('contenido')
<section>
    <div class="main-container">
        <form action="">
            <input type="text" name="nombre" id="nombre" placeholder = "Nombre">
            <input type="text" name="docente" id="docente" placeholder = "Docente">
            <select name="periodo" id="periodo">
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
            </select>
            <a href="empresa"><button class="btn btn-primary" type="button">Nuevo</button></a><br><br>

        </form>
        
    </div>
</section>
<section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                        <th width="20%" class="text-center">Nombre</th>
                        <th width="15%" class="text-center">Docente</th>
                        <th width="15%" class="text-center">Periodo</th>
                    </tr>
                    @foreach ($lista as $item)
                    <tr>
                        <td width="20%" class="text-center">{{$item->nombre}}</td>
                        <td width="15%" class="text-center">{{$item->docente}}</td>
                        <td width="15%" class="text-center">{{$item->periodo}}</td>
                    </tr>
                    @endforeach
                                 
                </tbody>
            </table>
        </div>
    </section>

@endsection