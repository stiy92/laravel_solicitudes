@extends('layouts.auth_app')
@section('title')
    Register
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header"><h4>Para registrarse favor llenar los siguientes datos. Los campos requeridos tienen ( * )</h4></div>
             <!-- agregando nombre -->
        <div class="card-body pt-2">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="first_name" >Full Name:</label><span
                                    class="text-danger">(*)</span>
                            <input id="firstName" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name"
                                   tabindex="1" placeholder="Enter Full Name" value="{{ old('name') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando apellido -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Ingrese su Apellido" class="control-label">Apellidos</label>
                             <span class="text-danger">(*)</span>
                            <input id="apellido" type="text" placeholder="Ingrese su Apellido" value="{{ old('apellido') }}"
                                   class="form-control{{ $errors->has('apellido') ? ' is-invalid': '' }}"
                                   name="apellido" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('apellido') }}
                            </div>
                        </div>
                    </div>
                     <!-- agregando email -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Email:</label><span
                                    class="text-danger">(*)</span>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Enter Email address" name="email" tabindex="1"
                                   value="{{ old('email') }}"
                                   required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando password -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="control-label">Password
                                :</label><span
                                    class="text-danger">(*)</span>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}"
                                   placeholder="Set account password" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando confirmar password -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation"
                                   class="control-label">Confirm Password:</label><span
                                    class="text-danger">(*)</span>
                            <input id="password_confirmation" type="password" placeholder="Confirm account password"
                                   class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}"
                                   name="password_confirmation" tabindex="2">
                            <div class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                    </div>

                     <!-- agregando tipo de documento -->
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="tip_docu"
                                   class="control-label">selecione el tipo de documento:</label><span
                                    class="text-danger">(*)</span>
                                    <select name="tip_docu" id="tip_docu" tabindex="1"
                                   autofocus required value="{{ old('tip_docu') }}"
                                   class="form-control{{ $errors->has('tip_docu') ? ' is-invalid': '' }}">
                                    <option value="notiene">--Please choose an option--</option>
                                    <option value="nit">nit</option>
                                    <option value="tarjeta de identidad">tarjeta de identidad</option>
                                    <option value="cedula">cedula</option>
                                    <option value="registro civil">registro civil</option>
                                    <option value="passport">passport</option>
                                    <option value="visa">visa</option></select>
                           
                            <div class="invalid-feedback">
                                {{ $errors->first('tip_docu') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando cc -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese la cedula ok"
                                   class="control-label">CC:</label><span
                                    class="text-danger">(*)</span>
                            <input id="cc" type="text" placeholder="ingese la cedula" value="{{ old('cc') }}"
                                   class="form-control{{ $errors->has('cc') ? ' is-invalid': '' }}"
                                   name="cc" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('cc') }}
                            </div>
                        </div>
                    </div>

                    

                    <!-- agregando edad -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese la edad"
                                   class="control-label">Edad:</label><span
                                    class="text-danger">(*)</span>
                            <input id="edad" type="text" placeholder="ingese la edad" value="{{ old('edad') }}"
                                   class="form-control{{ $errors->has('edad') ? ' is-invalid': '' }}"
                                   name="edad" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('edad') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando fecha_naci -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese la fecha de nacimiento"
                                   class="control-label">fecha de nacimeinto:</label><span
                                    class="text-danger">(*)</span>
                            <input id="f_naci" type="date" placeholder="ingese la fecha" value="{{ old('f_naci') }}"
                                   class="form-control{{ $errors->has('f_naci') ? ' is-invalid': '' }}"
                                   name="f_naci" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('f_naci') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando celular -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese el celular"
                                   class="control-label">Celular:</label><span
                                    class="text-danger">(*)</span>
                            <input id="celular" type="text" placeholder="ingese el celular" value="{{ old('celular') }}"
                                   class="form-control{{ $errors->has('celular') ? ' is-invalid': '' }}"
                                   name="celular" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('celular') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando telefono -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese el telefono"
                                   class="control-label">telefono:</label><span
                                    class="text-danger">(*)</span>
                            <input id="telefono" type="text" placeholder="ingese el telefono" value="{{ old('telefono') }}"
                                   class="form-control{{ $errors->has('telefono') ? ' is-invalid': '' }}"
                                   name="telefono" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('telefono') }}
                            </div>
                        </div>
                    </div>

                     <!-- agregando Razon social -->
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese el telefono"
                                   class="control-label">Razon social:</label><span
                                    class="text-danger">(*)</span>
                            <input id="R_social" type="text" placeholder="ingese la razon social" value="{{ old('R_social') }}"
                                   class="form-control{{ $errors->has('R_social') ? ' is-invalid': '' }}"
                                   name="R_social" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('R_social') }}
                            </div>
                        </div>
                    </div>

                     <!-- agregando direcion -->
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese la direcion"
                                   class="control-label">direcion:</label><span
                                    class="text-danger">(*)</span>
                            <input id="direcion" type="text" placeholder="ingese el direcion" value="{{ old('direcion') }}"
                                   class="form-control{{ $errors->has('direcion') ? ' is-invalid': '' }}"
                                   name="direcion" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('direcion') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando municipio -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese el municipio"
                                   class="control-label">municipio:</label><span
                                    class="text-danger">(*)</span>
    
                                   <select name="municipio" id="municipio" tabindex="1"
                                   autofocus required value="{{ old('municipio') }}"
                                   class="form-control{{ $errors->has('municipio') ? ' is-invalid': '' }}">
                                    <option value="">--Please choose an option--</option>
                                    <option value="cali">cali</option>
                                    <option value="buenaventura">buenaventura</option>
                                    <option value="bogota">bogota</option>
                                    </select>
                            <div class="invalid-feedback">
                                {{ $errors->first('municipio') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando zona_reside -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese la zona de residencia"
                                   class="control-label">Residencia:</label><span
                                    class="text-danger">(*)</span>
                            <input id="zona_reside" type="text" placeholder="ingese el zona de residencia" value="{{ old('zona_reside') }}"
                                   class="form-control{{ $errors->has('zona_reside') ? ' is-invalid': '' }}"
                                   name="zona_reside" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('zona_reside') }}
                            </div>
                        </div>
                    </div>
                    
                    <!-- agregando barrio -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese el barrio"
                                   class="control-label">barrio:</label><span
                                    class="text-danger">(*)</span>
                            <input id="barrio" type="text" placeholder="ingese el barrio" value="{{ old('barrio') }}"
                                   class="form-control{{ $errors->has('barrio') ? ' is-invalid': '' }}"
                                   name="barrio" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('barrio') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando ti_activida -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ingrese el tipo de actividad"
                                   class="control-label">Residencia:</label><span
                                    class="text-danger">(*)</span>
                            <input id="ti_activida" type="text" placeholder="ingese el tipo de actividad" value="{{ old('ti_activida') }}"
                                   class="form-control{{ $errors->has('ti_activida') ? ' is-invalid': '' }}"
                                   name="ti_activida" tabindex="1"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('ti_activida') }}
                            </div>
                        </div>
                    </div>

                    <!-- agregando 'aceptacion_leyes' -->
                    <div class="col-md-12">
                        <div class="form-group">
                        
                        <input id="aceptacion_leyes" type="checkbox" value="{{ old('aceptacion_leyes') }}" class="form-control-checkbox{{ $errors->has('aceptacion_leyes') ? ' is-invalid': '' }}" name="aceptacion_leyes" tabindex="1" autofocus required checked> 
                        <label for="aceptacion_leyes"
                                   class="control-label-s">Aceptacion_leyes:</label><span
                                    class="text-danger-s">(*)</span>       
                        <span> <label for="Acepto de manera voluntaria que el presente registro me vincule  al Sistema Automatizado en Línea - SAUL - para acceder a información y adelantar trámites ante la Alcaldía de Santiago de Cali. Para tal efecto, acepto ser notificado por medios electrónicos de todos los actos administrativos expedidos en el curso de los trámites adelantados, de conformidad con los artículos 54, 55 y 56 de la Ley 1437 de 2011." class="letter">
                                    Acepto de manera voluntaria que el presente registro me vincule  al Sistema Automatizado en Línea - SAUL - para acceder a información y adelantar trámites ante la Alcaldía de Santiago de Cali. Para tal efecto, acepto ser notificado por medios electrónicos de todos los actos administrativos expedidos en el curso de los trámites adelantados, de conformidad con los artículos 54, 55 y 56 de la Ley 1437 de 2011.
                                </label>
                                </span>
                                <button class="btn btn-primary " id="boton-modal">leer terminos y condiciones</button>
                            
                           
                                   
                            <div class="invalid-feedback">
                                {{ $errors->first('aceptacion_leyes') }}
                            </div>
                        </div>
                    </div>

                     <!-- agregando ''confirma_registro'' -->
                     <div class="col-md-12">
                        <div class="form-group">
                        <input id="confirma_registro" type="checkbox" value="{{ old('confirma_registro') }}"
                                   class="form-control-checkbox{{ $errors->has('confirma_registro') ? ' is-invalid': '' }}"
                                   name="confirma_registro" tabindex="1"
                                   autofocus required checked>
                                   <label for="confirma_registro"
                                   class="control-label-s" >Confirma_registro:</label><span
                                    class="text-danger-s">(*)</span>
                       <span> <label for="Confirmo que he leido y acepto los términos y condiciones de uso, de esta aplicación electrónica." >
                                   Confirmo que he leido y acepto los términos y condiciones de uso, de esta aplicación electrónica.
                                </label> </span>
                            
                            
                                   
                            <div class="invalid-feedback">
                                {{ $errors->first('confirma_registro') }}
                            </div>
                        </div>
                    </div>
                    
                    
                                


                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Registrarce
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        Already have an account ? <a
                href="{{ route('login') }}">SignIn</a>
    </div>
    
@endsection
