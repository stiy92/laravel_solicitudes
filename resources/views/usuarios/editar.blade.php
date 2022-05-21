@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar usuario</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                           
                        <!-- este codigo me permite capturar los mensajes de error desde la consola y mostrarlo en pantalla con un mensaje amistoso de cada campo requerido -->
                            <!-- @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                <strong>¡Revise los campos</strong>
                                @foreach ($errors->all() as $error)
                                <span class="badge badge-danger">{{$error}}</span>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" arial-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif -->
                             
                            <!-- debo de saer si este formuario maneja seguridad en el registro de datos -->
                            {!!Form::model($user, ['method' => 'PATCH', 'route'=>['usuarios.update', $user->id]]) !!}

                            <!-- editando nombre -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        {!!Form::text('name', null, array('class'=>'form-control'.( $errors->has('name') ? ' is-invalid': '' )))!!}
                                        <!-- con este div muestro el mesaje que se requiere el dato el cual lo esta solicitando en el form-control is-invalid -->
                                        <div class="invalid-feedback">
                                           {{ $errors->first('name') }}
                                         </div>
                                    </div>
                                </div>

                                <!-- agregando Email -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">E-mail</label>
                                        {!!Form::text('email', null, array('class'=>'form-control'.( $errors->has('email') ? ' is-invalid': '')))!!}
                                         <!-- con este div muestro el mesaje que se requiere el dato el cual lo esta solicitando en el form-control is-invalid -->
                                         <div class="invalid-feedback">
                                           {{ $errors->first('email') }}
                                         </div>
                                    </div>
                                </div>

                                 <!-- editando password -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Password</label>
                                        {!!Form::password('password', array('class'=>'form-control'.( $errors->has('password') ? ' is-invalid': '')))!!}
                                        <!-- con este div muestro el mesaje que se requiere el dato el cual lo esta solicitando en el form-control is-invalid -->
                                        <div class="invalid-feedback">
                                           {{ $errors->first('password') }}
                                         </div>
                                    </div>
                                </div>

                                <!-- agregando confirmar password -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name"> Confirmar Password</label>
                                        {!!Form::password('confirm-password', array('class'=>'form-control'.( $errors->has('confirm-password') ? ' is-invalid': '')))!!}
                                    <!-- con este div muestro el mesaje que se requiere el dato el cual lo esta solicitando en el form-control is-invalid -->
                                    <div class="invalid-feedback">
                                           {{ $errors->first('confirm-password') }}
                                         </div>
                                    </div>
                                </div>

                                <!-- editando Roles -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Roles</label>
                                        {!!Form::select( 'roles[]', $roles,[], array('class'=>'form-control'.( $errors->has('roles') ? ' is-invalid': '--Please choose an option--')))!!}
                                        <!-- con este div muestro el mesaje que se requiere el dato el cual lo esta solicitando en el form-control is-invalid -->
                                        <div class="invalid-feedback">
                                           {{ $errors->first('roles') }}
                                         </div>
                                    </div>
                                </div>

                                <!-- editando tipo de documento -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="tip_docu">Seleccione el tipo de documento</label>
                                        {!!Form::select('tip_docu', ['no tiene'=> '--Please choose an option--', 'nit'=>'nit','tarjeta de identidad'=>'tarjeta de identidad','cedula'=>'cedula','registro civil'=>'registro civil','passport'=>'passport','visa'=>'visa'], array('class'=>'form-control'.( $errors->has('tip_docu') ? ' is-invalid': 0)))!!}
                                        <!-- con este div muestro el mesaje que se requiere el dato el cual lo esta solicitando en el form-control is-invalid -->
                                        <div class="invalid-feedback">
                                           {{ $errors->first('tip_docu') }}
                                         </div>
                                    </div>
                                </div>

                                <!-- editando cc -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="cc">Numero de documento</label>
                                        {!!Form::text('cc',null , array('class'=>'form-control'.( $errors->has('cc') ? ' is-invalid': '')))!!}
                                        <!-- con este div muestro el mesaje que se requiere el dato el cual lo esta solicitando en el form-control is-invalid -->
                                        <div class="invalid-feedback">
                                           {{ $errors->first('cc') }}
                                         </div>
                                    </div>
                                </div>

                                <!-- editando edad -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="edad">Edad</label>
                                        {!!Form::text('edad',null , array('placeholder'=>'ingrese la edad','class'=>'form-control'.( $errors->has('edad') ? ' is-invalid': '')))!!}
                                        <!-- con este div muestro el mesaje que se requiere el dato el cual lo esta solicitando en el form-control is-invalid -->
                                        <div class="invalid-feedback">
                                           {{ $errors->first('edad') }}
                                         </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                   <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                            {!!Form::close()!!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </section>
@endsection
