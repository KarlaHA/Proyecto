@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<section>
        <div class="main-container">
            <section>
                <div class="table-container">
                    <table class="table table-light table-bordered">
                        <tbody>
                            <tr>
                                <th width="15%" class="text-center">Matricula</th>
                                <th width="20%" class="text-center">Nombre</th>
                                <th width="15%" class="text-center">Carrera</th>
                                <th width="15%" class="text-center">Calif 1P</th>
                                <th width="15%" class="text-center">Calif 2P</th>
                                <th width="15%" class="text-center">Calif final</th>
                            </tr>
                            
                            

                                         
                        </tbody>
                    </table>
                </div>

                <a href="empresa"><button class="btn btn-primary" type="button">Terminar</button></a><br><br>

            </section>  
        </div>
    </section>
@endsection