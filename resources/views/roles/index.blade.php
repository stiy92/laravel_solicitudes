@extends('layouts.app')

  @section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- boton para crear esto solo lo ven los que tienen permiso -->
                            @can('crear-rol')
                            <a class="btn btn-warning" href="{{route('roles.create')}}">Nuevo</a>
                            @endcan
                       <!-- crear tabla cargando los permisos -->
                    <table class="table table-striped mt-2">
                       <thead style="background-color: #6777ef;">
                           <tr>
                            <th scope="col" style="color:#fff">Rol</th>
                            <th scope="col" style="color:#fff">Acciones</th>
                           </tr>
                        </thead>
                    <tbody>
                 @foreach($roles as $role)
                      <tr>
                          <td>{{$role->name}}</td>
                           <td>
                            <!-- ver roles -->
                            @can('ver-rol')
                           <a class="btn btn-success" href="{{route('roles.show', $role->id)}}">Ver</a>
                            @endcan
        <!-- editar -->
      @can('editar-rol')
      <a class="btn btn-primary" href="{{route('roles.edit', $role->id)}}">Editar</a>
      @endcan

      <!-- borrar con formulario actualizado-->
      @can('borrar-rol')
      {!! Form::open(['method'=> 'delete', 'route'=> ['roles.destroy', $role->id], 'style'=>'display:inline'])!!}
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
                                 {!! $roles->links()!!}
                             </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection
