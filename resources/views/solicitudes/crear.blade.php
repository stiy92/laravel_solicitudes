@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Solicitud</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- control de errores con esto capturo los errores y los muestro en pantalla -->
                            @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>¡Revise los campos</strong>
                                @foreach ($errors->all() as $error)
                                <span class="badge badge-danger">{{$error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" arial-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <!--formulario antiguo -->
                            <form action="{{ route('solicitudes.store')}}" method="POST">
                              @csrf
                              <div class="row">
                               <div class="col-xs-12 col-sm-12 col-md-12">
                                 <div class="form-group">
                                   <label for="nombre">Nombre</label>
                                   <input type="text" name="nombre" class="form-control">
                                 </div>
                               </div>

                               <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-floating">
                                <textarea class="form-control" name="descripcion" style="height: 100px"></textarea>
                                <label for="descripcion">Descripcion</label>
                               </div>
                            <button type="submit" class="btn btn-primary">guardar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
