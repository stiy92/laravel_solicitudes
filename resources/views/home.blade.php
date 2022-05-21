@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Home</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-4 col-xl-4">
                                   <div class="card bg-c-blue order-card">
                                      <div class="card-block">
                                           <h5>Usuarios</h5>
                                           @php
                                           use App\Models\User;
                                           $cant_user= User::count();
                                           @endphp
                                           <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_user}}</span></h2>
                                           <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver mas</a></p>
                                      </div>
                                   </div>
                               </div>

                               <div class="col-md-4 col-xl-4">
                                   <div class="card bg-c-green order-card">
                                      <div class="card-block">
                                          <h5>Roles</h5>
                                          @php
                                          use Spatie\Permission\Models\Role;
                                          $cant_role= Role::count();
                                          @endphp
                                          <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_role}}</span></h2>
                                          <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver mas</a></p>
                                      </div>
                                   </div>
                               </div>

                               <div class="col-md-4 col-xl-4">
                                   <div class="card bg-c-pink order-card">
                                       <div class="card-block">
                                           <h5>Solicitudes</h5>
                                           @php
                                           use App\Models\solicitudes;
                                           $cant_blog= solicitudes::count();
                                           @endphp
                                           <h2 class="text-right"><i class="fa fa-blog f-left"></i><span>{{$cant_blog}}</span></h2>
                                           <p class="m-b-0 text-right"><a href="/blogs" class="text-white">Ver mas</a></p>
                                       </div>
                                   </div>
                               </div>

                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


