@extends('templates.plantilla')

@section('titulo', 'Calificaciones')

@section('contenido')

    <section>
        <div class="table-container">
            <table class="table table-light table-bordered">
                <tbody>
                    <tr>
                       
                        <th width="12.5%" class="text-center">Matricula</th>
                        <th width="12.5%" class="text-center">Nombre</th>
                        <th width="12.5%" class="text-center">Asesor</th>
                        <th width="12.5%" class="text-center">Empresa</th>
                        <th width="12.5%" class="text-center">Calificacion P1</th>
                        <th width="12.5%" class="text-center">Calificacion P2</th>
                        <th width="12.5%" class="text-center">Promedio</th>
                        <th width="12.5%" class="text-center">Asignar</th>
                    </tr>
                        @foreach ($lista as $item)
                    <tr>
                        
                            <form method= "POST" action="calificaciones/asignar">
                                @csrf
                                <td width="12.5%" class="text-center">{{$item->matricula}}</td>
                                <td width="12.5%" class="text-center">{{$item->alumnonombre}}</td>
                                <td width="12.5%" class="text-center">{{$item->nombre}}</td>
                                <td width="12.5%" class="text-center">{{$item->empresa_id}}</td>
                                <td width="12.5%" class="text-center"><input type="text" id="cal_p1" name="cal_p1" placeholder="{{$item->cal_p1}}"></td>
                                <td width="12.5%" class="text-center"><input type="text" id="cal_p2" name="cal_p2" placeholder="{{$item->cal_p2}}"></td>
                                <td width="12.5%" class="text-center">{{($item->cal_p1 + $item->cal_p2)/2}}</td>
                                <td width="12.5%" class="text-center">
                                    <button class="btn btn-primary" 
                                            name="btnAccion"
                                            value="Guardar"
                                            type="submit">Asignar</button>
                                
                                <input type="hidden" id="id" name="id" value="{{$item->alumnoid}}">
                                
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