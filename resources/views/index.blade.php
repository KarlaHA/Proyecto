@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

    <section>
        <div class="main-container">
            <div>
                <form action="/buscar" method= "GET">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Buscar...</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="texto" id="texto">
                      </div>
                </form>
            </div>
        </div>
        <div class="btn-container">
            <a href="/registro"><button class="btn btn-primary" type="button">Nuevo</button></a>
        </div>
    </section>
    <section>
                    <div id="resultados" ></div>               
    </section>
        <script type = 'text/javascript'> 
            const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
    
                document.getElementById('texto').addEventListener('keyup', (e)=>{
                fetch('/buscar',{
                    method:'POST',
                    body: JSON.stringify({texto : e.target.value}),
                    headers:{
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": csrfToken
                    }
                }).then(response =>{
                    return response.json()
                }).then(data=>{
                    var opciones ='<div class="table-container"><table class="table table-light table-bordered"><thead><tr><th width="20%" class="text-center">Nombre</th><th width="15%" class="text-center">Representante</th><th width="15%" class="text-center">Ciudad</th><th width="15%" class="text-center">Estado</th><th width="15%" class="text-center">Carrera</th><th width="15%" class="text-center">Estatus</th></tr></thead><tbody>';
                    for (let i in data.lista) {
                        opciones+= '<tr>';
                        opciones+= '<td width="20%" class="text-center">'+data.lista[i].nombre+'</td>';
                        opciones+= '<td width="15%" class="text-center">'+data.lista[i].representante+'</td>';
                        opciones+= '<td width="15%" class="text-center">'+data.lista[i].ciudad+'</td>';
                        opciones+= '<td width="15%" class="text-center">'+data.lista[i].estado+'</td>';
                        opciones+= '<td width="15%" class="text-center">'+data.lista[i].carrera+'</td>';
                        opciones+= '<td width="15%" class="text-center">'+data.lista[i].estatus+'</td>';
                        opciones+= '</tr>';
                    }
                    opciones+='</tbody></table></div>'
                    document.getElementById("resultados").innerHTML = opciones;
                }).catch(error=>console.error(error));
            })
            
            
        </script>
@endsection
