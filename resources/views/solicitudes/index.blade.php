@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Solicitudes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        
                            <!-- boton para crear esto solo lo ven los que tienen permiso -->
                            @can('crear-solicitudes')<!--de acuerdo al nombre del rol en la tabla de db-->
                            <a class="btn btn-warning" href="{{route('solicitudes.create')}}">Nuevo</a>
                            @endcan

 <!-- crear tabla cargando los permisos -->
 <table class="table table-striped mt-2">
    <thead style="background-color: #6777ef;">
      <th scope="col" style="display:none">ID</th>
      <th scope="col" style="color:#fff">Nombre</th>
      <th scope="col" style="color:#fff">Descripcion</th>
      <th scope="col" style="color:#fff">CC user</th>
      <th scope="col" style="color:#fff">Acciones</th>
  </thead>
  <tbody>
  @foreach($solicitudes as $solicitud)
       <tr>
         <td >{{$solicitud->nombre}}</td>
         <td>{{$solicitud->descripcion}}</td>
         <td>{{$solicitud->cc}}</td>
       
         <td>
              <!-- borrar y editar Scon formulario antiguo para variar-->
              <!-- sus parametros funcionan bien hay que ver como se reciven en el controlador -->
              <form action="{{ route('solicitudes.destroy', $solicitud->id)}}" method="POST">
               @can('editar-solicitudes')<!--de acuerdo al nombre del rol en la tabla de db-->
               <a class="btn btn-info" href="{{route('solicitudes.edit', $solicitud->id)}}">Editar</a>
               @endcan
               
               @csrf
               @method('DELETE')
               @can('borrar-solicitudes')<!--de acuerdo al nombre del rol en la tabla de db-->
               <button type="submit" class="btn btn-danger">Borrar</button>
               @endcan
              </form>
         </td>
         
       </tr>
    @endforeach
  </tbody>
   </table>
   <!-- paginacion queda a la derecha -->
   <div class="pagination justify-content-end">
         {!! $solicitudes->links()!!}
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection
