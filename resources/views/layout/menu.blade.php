<ul class="sidebar-menu">
    <li class="header">Menú de navegación</li>
    <li class="{{ Request::route()->getName() == 'dashboard' ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard </span></a>
    </li>

    <li class="treeview {{ in_array(Request::segment(1), ['especies','razas','hato','lote','actividad','peso']) ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}">
            <i class="fa fa-cog"></i> <span>Referencias</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::segment(1) == 'hato' ? 'active' : '' }}">
                <a href="{{ route('hato.index') }}"><i class="fa fa-circle-o"></i> Hato</a>
            </li>
        </ul>
        <ul class="treeview-menu">
            <li class="{{ Request::segment(1) == 'lote' ? 'active' : '' }}">
                <a href="{{ route('lote.index') }}"><i class="fa fa-circle-o"></i> Lote</a>
            </li>
        </ul>
        <ul class="treeview-menu">
            <li class="{{ Request::segment(1) == 'especies' ? 'active' : '' }}">
                <a href="{{ route('especies.index') }}"><i class="fa fa-circle-o"></i> Especies</a>
            </li>
        </ul>
         <ul class="treeview-menu">
            <li class="{{ Request::segment(1) == 'razas' ? 'active' : '' }}">
                <a href="{{ route('razas.index') }}"><i class="fa fa-circle-o"></i> Razas</a>
            </li>
        </ul>
        <ul class="treeview-menu">
            <li class="{{ Request::segment(1) == 'peso' ? 'active' : '' }}">
                <a href="{{ route('peso.index') }}"><i class="fa fa-circle-o"></i> Peso</a>
            </li>
        </ul>
        <ul class="treeview-menu">
            <li class="{{ Request::segment(1) == 'actividad' ? 'active' : '' }}">
                <a href="{{ route('actividad.index') }}"><i class="fa fa-circle-o"></i> Actividad</a>
            </li>
        </ul>
    </li>
    <li class="{{ Request::route()->getName() == 'animal' ? 'active' : '' }}">
        <a href="{{ route('animal.index') }}"><i class="fa fa-cog"></i> <span>Animal </span></a>
    </li>
    <li class="{{ Request::route()->getName() == 'sanidad' ? 'active' : '' }}">
        <a href="{{ route('sanidad.index') }}"><i class="fa fa-cog"></i> <span>Sanidad </span></a>
    </li>
</ul>