@extends('templates.plantilla')


@section('titulo', 'Asignar Proyecto')

@section('contenido')

        <span>Nombre del alumno: {{$request->nombre}}</span><br>
        <span>Matricula del alumno: {{$request->matricula}}</span><br>
        <span>Carrera del alumno: {{$request->carrera}}</span><br>
        <span>Semestre del alumno: {{$request->semestre}}</span><br>
        <span>Creditos del alumno: {{$request->creditos}}</span><br>

        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                        <th width="25%" class="text-center">Nombre</th>
                        <th width="25%" class="text-center">Docente</th>
                        <th width="25%" class="text-center">Periodo</th>
                        <th width="25%" class="text-center">Asignar</td>
                    </tr>
                    @foreach ($registros as $item)
                    <tr>
                        <td width="25%" class="text-center">{{$item->nombre}}</td>
                        <td width="25%" class="text-center">{{$item->docente}}</td>
                        <td width="25%" class="text-center">{{$item->periodo}}</td>
                        <td width="25%" class="text-center">
                            <form method= "POST" action="asignacionaproyectos/nuevo">
                                @csrf
                                
                                    <button class="btn btn-primary" 
                                            name="btnAccion"
                                            value="Guardar"
                                            type="submit">Asignar</button>
                                
                    
                                    <input type="hidden" name="alumnoid" id="alumnoid" value="{{$request->id}}">
                                    <input type="hidden" name="proyectoid" id="proyectoid" value="{{$item->id}}">
                                    <input type="hidden" name="estatus" id="estatus" value="Asignado">
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                                 
                </tbody>
            </table>
        </div>

@endsection