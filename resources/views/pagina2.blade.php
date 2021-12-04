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
            

            <input type="text" name="nombre" id="nombre" placeholder = "Nombre"><br><br>
            <input type="text" name="representante" id="representante" placeholder = "Representante"><br><br>
            <select name="estado" id="estado">
            <option selected='selected' disabled>Ciudad</option>
                <option value="Aguacalientes"> Aguascalientes</option>
                <option value="Baja California"> Baja California </option>
                <option value="Baja California Sur"> Baja California Sur </option>
                <option value="Campeche"> Campeche </option>
                <option value="Coahuila"> Coahuila </option>
                <option value="Colima"> Colima </option>
                <option value="Chiapas"> Chiapas </option>
                <option value="Chihuahua"> Chihuahua </option>
                <option value="CDMX"> CDMX </option>
                <option value="Durango"> Durango </option>
                <option value="Guanajuato"> Guanajuato </option>
                <option value="Guerrero"> Guerrero </option>
                <option value="Hidalgo"> Hidalgo </option>
                <option value="Jalisco"> Jalisco </option>
                <option value="Mexico"> Mexico </option>
                <option value="Michoacan"> Michoacan</option>
                <option value="Morelos"> Morelos </option>
                <option value="Nayarit"> Nayarit </option>
                <option value="Nuevo Leon"> Nuevo Leon </option>
                <option value="Oaxaca"> Oaxaca </option>
                <option value="Puebla"> Puebla </option>
                <option value="Queretaro"> Queretaro </option>
                <option value="Quintana Roo"> Quintana Roo </option>
                <option value="San Luis Potosi"> San Luis Potosi </option>
                <option value="Sinaloa"> Sinaloa </option>
                <option value="Sonora"> Sonora </option>
                <option value="Tabasco"> Tabasco </option>
                <option value="Tamaulipas"> Tamaulipas </option>
                <option value="Tlaxcala"> Tlaxcala </option>
                <option value="Veracruz"> Veracruz </option>
                <option value="Yucatan"> Yucatan </option>
                <option value="Zacatecas"> Zacatecas </option>
            </select><br><br>
            <select name="ciudad" id="ciudad">
            <option selected='selected' disabled>Estado</option>
            <option value="Aguacalientes"> Aguascalientes</option>
                <option value="Mexicali"> Mexicali </option>
                <option value="La Paz"> La Paz </option>
                <option value="Campeche"> Campeche </option>
                <option value="Calkini"> Calkini </option>
                <option value="Saltillo"> Saltillo </option>
                <option value="Colima"> Colima </option>
                <option value="Tuxtla"> Tuxtla </option>
                <option value="Chihuahua"> Chihuahua </option>
                <option value="CDMX"> CDMX </option>
                <option value="Durango"> Durango </option>
                <option value="Guanajuato"> Guanajuato </option>
                <option value="Chilpancingo"> Chilpancingo </option>
                <option value="Pachuca"> Pachuca </option>
                <option value="Guadalajara"> Guadalajara </option>
                <option value="Toluca"> Toluca </option>
                <option value="Morelia"> Morelia</option>
                <option value="Cuernavaca"> Cuernavaca </option>
                <option value="Tepic"> Tepic </option>
                <option value="Monterrey"> Monterrey </option>
                <option value="Oaxaca"> Oaxaca </option>
                <option value="Puebla"> Puebla </option>
                <option value="Queretaro"> Queretaro </option>
                <option value="Cancun"> Cancun </option>
                <option value="San Luis Potosi"> San Luis Potosi </option>
                <option value="Culiacan"> Culiacan </option>
                <option value="Hermosillo"> Hermosillo </option>
                <option value="Villahermosa"> Villahermosa </option>
                <option value="Ciudad Victoria"> Ciudad Victoria </option>
                <option value="Tlaxcala"> Tlaxcala </option>
                <option value="Xalapa"> Xalapa </option>
                <option value="Merida"> Merida </option>
                <option value="Zacatecas"> Zacatecas </option>
            </select><br><br>
            <select name="estatus" id="estatus">
            <option selected='selected' disabled>Status</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select><br><br>
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
            </select><br><br>
            
        </form>
        <button class="btn btn-primary" type="button">Agregar departamento</button>
        <a href="http://localhost/proyecto/public/vacantes"><button class="btn btn-primary" type="button">Vacantes</button></a><br><br>
        
    </div>

@endsection
