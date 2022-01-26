@extends('templates.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

<section>
        <div class="main-container">
            <div>
               
                  
                <a href="nuevoasesor"><button class="btn btn-primary" type="button">Nuevo</button></a>
           
            </div>
        </div>
    </section>
    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                       
                        <th width="16.6%" class="text-center">Nombre</th>
                        <th width="16.6%" class="text-center">Empresa</th>
                        <th width="16.6%" class="text-center">Correo</th>
                        <th width="16.6%" class="text-center">Telefono</th>
                        <th width="16.6%" class="text-center">Cargo</th>
                        <th width="16.6%" class="text-center">Asignar</th>
                    </tr>
                        @foreach ($list as $item)
                    <tr>
                        <td width="16.6%" class="text-center">{{$item->nombre}}</td>
                        <td width="16.6%" class="text-center">{{$item->nombreempresa}}</td>
                        <td width="16.6%" class="text-center">{{$item->correo}}</td>
                        <td width="16.6%" class="text-center">{{$item->telefono}}</td>
                        <td width="16.6%" class="text-center">{{$item->cargo}}</td>
                        <td width="16.6%" class="text-center">
                            <form method= "POST" action="asignarasesor">
                                @csrf
                                
                                    <button class="btn btn-primary" 
                                            name="btnAccion"
                                            value="Guardar"
                                            type="submit">Asignar</button>
                                
                                <input type="hidden" id="id" name="id" value="{{$item->id}}">
                                
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