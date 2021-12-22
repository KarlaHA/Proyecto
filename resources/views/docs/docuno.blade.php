@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<section>
        <div class="main-container">
            <div>
               
                  
                    <a href="/creardocumento"><button class="btn btn-primary" type="button">Nuevo Documento</button></a>
           
            </div>
        </div>
    </section>
    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                       
                        <th width="15%" class="text-center">Tipo</th>
                        <th width="15%" class="text-center">Tamaño</th>
                        <th width="15%" class="text-center">Fecha</th>
                        <th width="15%" class="text-center">Matricula</th>
                        <th width="15%" class="text-center">Opciones</th>
                       

                       
                    </tr> 
                </tbody>
            </table>
        </div>
    </section>
@endsection
