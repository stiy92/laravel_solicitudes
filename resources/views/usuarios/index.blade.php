@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Lista De Usuarios</h3>

                            <!-- boton para crear esto solo lo ven los que tienen permiso -->
                            @can('crear-usuario') <!--de acuerdo al nombre del rol en la tabla de db-->
                            <a class="btn btn-warning" href="{{route('usuarios.create')}}">Nuevo</a>
                            @endcan

                            <!-- tabla cargando datos -->
                            <table class="table table-striped mt-2">
                             <thead style="background-color: #6777ef;">
                              <tr>
                               <th scope="col" style="display:none">Id</th>
                               <th scope="col" style="color:#fff">Nombre</th>
                               <th scope="col" style="color:#fff">E-mail</th>
                               <th scope="col" style="color:#fff">Rol</th>
                               <th scope="col" style="color:#fff">Acciones</th>
                              </tr>
                             </thead>
                             <tbody>
                             @foreach($usuarios as $usuario)
                            <tr>
                            <th scope="row" style="display:none" >{{$usuario->id}}</th>
                              <td>{{$usuario->name}}</td>
                              <td>{{$usuario->email}}</td>
                              <td>@if(!empty($usuario->getRoleNames()))
                                  @foreach($usuario->getRoleNames() as $rolName)
                                  <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                  @endforeach
                                  @endif
                              </td>

<td>
        <!-- boton para crear esto solo lo ven los que tienen permiso -->
        @can('ver-usuario') <!--de acuerdo al nombre del rol en la tabla de db-->
        <a class="btn btn-success" href="{{route('usuarios.show', $usuario->id)}}">Ver</a>
        @endcan

         <!-- boton para crear esto solo lo ven los que tienen permiso -->
          @can('editar-usuario') <!--de acuerdo al nombre del rol en la tabla de db-->
          <a class="btn btn-info" href="{{route('usuarios.edit', $usuario->id)}}">Editar</a>
          @endcan


    <!-- boton para crear esto solo lo ven los que tienen permiso -->
    @can('borrar-usuario') <!--de acuerdo al nombre del rol en la tabla de db-->
    {!! Form::open(['method'=> 'delete', 'route'=> ['usuarios.destroy', $usuario->id], 'style'=>'display:inline'])!!}
    {!! Form::submit('Borrar', ['class'=>'btn btn-danger'])!!}
    {!! Form::close()!!}
    @endcan
</td>
    
      
    </tr>
    @endforeach
  </tbody>
</table>
<!-- paginacion queda a la derecha -->
<div class="pagination justify-content-end">
                                 {!! $usuarios->links()!!}
                             </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection