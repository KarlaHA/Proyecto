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
                        <th width="15%" class="text-center">Carrera</th>
                        <th width="15%" class="text-center">Periodo</th>
                        <th width="15%" class="text-center">Vacantes</th>
                        @foreach ($list as $item)
                    <tr>
                        <td width="20%" class="text-center">{{$item->docente}}</td>
                        <td width="15%" class="text-center">{{$item->carrera}}</td>
                        <td width="15%" class="text-center">{{$item->periodo}}</td>
                        <td width="15%" class="text-center">{{$item->cantidad}}</td>
                    </tr>
                    @endforeach
                       

                       
                    </tr> 
                </tbody>
            </table>
        </div>
    </section>
@endsection