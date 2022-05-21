<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('home')}}">
        <i class=" fas fa-home"></i><span>Home</span>
    </a>
    <a class="nav-link" href="{{route('usuarios.index')}}">
        <i class="fas fa-users"></i><span>Usuarios</span>
        
    </a>
    <a class="nav-link" href="{{route('roles.index')}}">
        <i class="fas fa-lock"></i><span>Roles</span>
    </a>
    <a class="nav-link" href="{{route('solicitudes.index')}}">
        <i class=" fas fa-headset"></i><span>Solicitudes</span>
    </a>
</li>
