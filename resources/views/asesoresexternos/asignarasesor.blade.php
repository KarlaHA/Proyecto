@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

    <section>
        <span>Nombre del asesor: {{$asesor[0]->nombre}}</span><br>
        <span>Empresa del asesor: {{$asesor[0]->nombreempresa}}</span><br>
        <span>Correo del asesor: {{$asesor[0]->correo}}</span><br>
        <span>Telefono del asesor: {{$asesor[0]->telefono}}</span><br>
        <span>Cargo del asesor: {{$asesor[0]->cargo}}</span><br>
    </section>
    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <thead>
                    <tr>
                       
                        <th width="15%" class="text-center">Matricula</th>
                        <th width="25%" class="text-center">Nombre</th>
                        <th width="15%" class="text-center">Carrera</th>
                        <th width="15%" class="text-center">Semestre</th>
                        <th width="15%" class="text-center">Creditos</th>
                        <th width="15%" class="text-center">Asignar</th>

                       
                    </tr>
                </thead>
                <tbody>
                     
                    @foreach ($alumnos as $item)
                            <tr> 
                                
                                <td width="15%" class="text-center">{{$item->matricula}}</td>
                                <td width="25%" class="text-center">{{$item->nombre}}</td>
                                <td width="15%" class="text-center">{{$item->carrera}}</td>
                                <td width="15%" class="text-center">{{$item->semestre}}</td>
                                <td width="15%" class="text-center">{{$item->creditos}}</td>
                                <td width="15%" class="text-center">
                                    <form method= "POST" action="asignarasesor/asignar">
                                        @csrf
                                        
                                            <button class="btn btn-primary" 
                                                    name="btnAccion"
                                                    value="Guardar"
                                                    type="submit">Asignar</button>
                                        
                                        <input type="hidden" id="alumno_id" name="alumno_id" value="{{$item->id}}">
                                        <input type="hidden" id="asesorexterno_id" name="asesorexterno_id" value="{{$asesor[0]->id}}">
                                        
                                        
                                    </form>
                                </td>

                                
                                
                            </tr>
                        
                    @endforeach  
                </tbody>
            </table>
        </div>
    </section>
@endsection