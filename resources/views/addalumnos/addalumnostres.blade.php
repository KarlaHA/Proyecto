@extends('templates.plantilla')


@section('titulo', 'Asignar Empresa')

@section('contenido')


        <span>Nombre del alumno: {{$request->nombre}}</span><br>
        <span>Matricula del alumno: {{$request->matricula}}</span><br>
        <span>Carrera del alumno: {{$request->carrera}}</span><br>
        <span>Semestre del alumno: {{$request->semestre}}</span><br>
        <span>Creditos del alumno: {{$request->creditos}}</span><br>

    

    <div class="table-container">
        <table class="table table-light table-bordered">
            <thead>
                <tr>
                    <th width="15%" class="text-center">Nombre</td>
                    <th width="15%" class="text-center">Representante</td>
                    <th width="15%" class="text-center">Ciudad</td>
                    <th width="15%" class="text-center">Estado</td>
                    <th width="20%" class="text-center">Carrera</td> 
                    <th width="20%" class="text-center">Asignar</td>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $item)
                    <tr>

                        <td width="15%" class="text-center">{{$item->nombre}}</td>
                        <td width="15%" class="text-center">{{$item->representante}}</td>
                        <td width="15%" class="text-center">{{$item->ciudad}}</td>
                        <td width="15%" class="text-center">{{$item->estado}}</td>
                        <td width="20%" class="text-center">{{$item->carrera}}</td>
                        <td width="20%" class="text-center">
                            <form action="asignacionaempresas/nuevo" method= "POST">
                                @csrf
                                
                                    <button class="btn btn-primary" 
                                            name="btnAccion"
                                            value="Guardar"
                                            type="submit">Asignar</button>
                                
                    
                                    <input type="hidden" name="alumnoid" id="alumnoid" value="{{$request->id}}">
                                    <input type="hidden" name="empresaid" id="empresaid" value="{{$item->id}}">
                                    <input type="hidden" name="estatus" id="estatus" value="Asignado">
                                
                            </form>
                            
                        </td>
                        
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    
    


@endsection