@extends('templates.plantilla')

@section('titulo', 'asesores')

@section('contenido')


    <div class="btn-container">
        <form method= "POST" action="enviarasesor">
            @csrf
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
                <a href="asesordos"><button class="btn btn-primary" type="button">Consultar asesores registrados</button></a>
                
            <input type="text" name="docente" id="docente" placeholder = "Docente"><br><br>
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
            <select name="periodo" id="periodo">
            <option selected='selected' disabled>Periodo</option>
                <option value="2019">2019</option>
                <option value="2021">2021</option>
            </select><br><br>
            <input type="text" name="cantidad" id="cantidad" placeholder = "vacantes"><br><br>
           
           
        </form>
        <div class="btn-container">
       
       
       
        
    </div>

@endsection