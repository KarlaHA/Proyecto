@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<section>
        <div class="main-container">
            <div>
               
                  
                <a href=""><button class="btn btn-primary" type="button">Salir</button></a>
           
            </div>
        </div>
    </section>
    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                       
                        <th width="15%" class="text-center">Docente</th>
                        <th width="15%" class="text-center">Vacantes</th>
                        <th width="15%" class="text-center">Carrera</th>
                        <th width="15%" class="text-center">Opciones</th>
                       

                       
                    </tr> 
                </tbody>
            </table>
        </div>
    </section>
@endsection