@extends('templates.plantilla')

@section('titulo', 'Nuevo Registro')

@section('contenido')


    <div class="btn-container">
        <form method= "POST" action="registro/nuevo">
            @csrf
            
            <button class="btn btn-primary" 
                name="btnAccion"
                value="Guardar"
                type="submit">Guardar</button>
            

            <input type="text" name="nombre" id="nombre" placeholder = "Nombre"><br><br>
            <input type="text" name="representante" id="representante" placeholder = "Representante"><br><br>
            <select name="estado" id="estado">
                <option selected disabled value="">Estado</option>
                @foreach ($estados as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach
            </select><br><br>
            <select name="ciudad" id="ciudad"></select><br><br>
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
    <script>
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        document.getElementById('estado').addEventListener('change', (e)=>{
            fetch('registro/municipios',{
                method:'POST',
                body: JSON.stringify({texto : e.target.value}),
                headers:{
                    'Content-Type': 'application/json',
                    "X-CSRF-Token": csrfToken
                }
            }).then(response =>{
                return response.json()
            }).then(data=>{
                var opciones ='<option selected disabled value="">Municipio</option>';
                for (let i in data.lista) {
                    opciones+= '<option value="'+data.lista[i].nombre+'">'+data.lista[i].nombre+'</option>';
                }
                document.getElementById("ciudad").innerHTML = opciones;
            }).catch(error=>console.error(error));
        })
    </script>
@endsection
