@extends('templates.plantilla')

@section('titulo', 'Asignar docente a alumno')

@section('contenido')

    <span>Nombre del docente: {{$request->docente}}</span><br>
    <span>Carrera del docente: {{$request->carrera}}</span><br>
    <span>Periodo del docente: {{$request->periodo}}</span><br>
    <span># de Vacantes: {{$request->cantidad}}</span><br>

    <div class="table-container">

        <table class="table table-light table-bordered">
            <tbody>
                <tr>
                   
                    <th width="20%" class="text-center">Nombre</th>
                    <th width="20%" class="text-center">Matricula</th>
                    <th width="20%" class="text-center">Carrera</th>
                    <th width="20%" class="text-center">Semestre</th>
                    <th width="20%" class="text-center">Asignar</th>
                    
                </tr>
                    @foreach ($lista as $item)
                <tr>
                    <td width="20%" class="text-center">{{$item->nombre}}</td>
                    <td width="20%" class="text-center">{{$item->matricula}}</td>
                    <td width="20%" class="text-center">{{$item->carrera}}</td>
                    <td width="20%" class="text-center">{{$item->semestre}}</td>

                    <td width="20%" class="text-center">
                        <form method= "POST" action="asignardocente/guardar">
                            @csrf
                            
                                <button class="btn btn-primary" 
                                        name="btnAccion"
                                        value="Guardar"
                                        type="submit">Asignar</button>
                            
                            <input type="hidden" id="id" name="id" value="{{$item->id}}">
                            <input type="hidden" id="docenteid" name="docenteid" value="{{$request->id}}">
                            <input type="hidden" id="nombre" name="nombre" value="{{$item->nombre}}">
                            <input type="hidden" id="matricula" name="matricula" value="{{$item->matricula}}">
                            <input type="hidden" id="carrera" name="carrera" value="{{$item->carrera}}">
                            <input type="hidden" id="semestre" name="semestre" value="{{$item->semestre}}">
                            
                        </form>
                    </td>
                </tr>
                @endforeach
                   

                   
                </tr> 
            </tbody>
        </table>

    </div>

@endsection