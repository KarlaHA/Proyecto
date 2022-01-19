@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<section>
        <div class="main-container">
            <div>
               
                  
                <a href="asesordos"><button class="btn btn-primary" type="button">Nuevo</button></a>
           
            </div>
        </div>
    </section>
    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                       
                        <th width="20%" class="text-center">Docente</th>
                        <th width="20%" class="text-center">Carrera</th>
                        <th width="20%" class="text-center">Periodo</th>
                        <th width="20%" class="text-center">Vacantes</th>
                        <th width="20%" class="text-center">Asignar</th>
                    </tr>
                        @foreach ($list as $item)
                    <tr>
                        <td width="20%" class="text-center">{{$item->docente}}</td>
                        <td width="20%" class="text-center">{{$item->carrera}}</td>
                        <td width="20%" class="text-center">{{$item->periodo}}</td>
                        <td width="20%" class="text-center">{{$item->cantidad}}</td>
                        <td width="20%" class="text-center">
                            <form method= "POST" action="asignardocente">
                                @csrf
                                
                                    <button class="btn btn-primary" 
                                            name="btnAccion"
                                            value="Guardar"
                                            type="submit">Asignar</button>
                                
                                <input type="hidden" id="id" name="id" value="{{$item->id}}">
                                <input type="hidden" id="docente" name="docente" value="{{$item->docente}}">
                                <input type="hidden" id="carrera" name="carrera" value="{{$item->carrera}}">
                                <input type="hidden" id="periodo" name="periodo" value="{{$item->periodo}}">
                                <input type="hidden" id="cantidad" name="cantidad" value="{{$item->cantidad}}">
                                
                            </form>
                        </td>
                    </tr>
                    @endforeach
                       

                       
                    </tr> 
                </tbody>
            </table>
        </div>
    </section>
@endsection