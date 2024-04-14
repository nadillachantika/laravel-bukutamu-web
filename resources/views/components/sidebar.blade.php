<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Yayasan Mutiara Hati</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="{{ request()->routeIs('user.index') ? 'active' : '' }}"><a href="{{ route('user.index') }}" class="nav-link"><i class="fas fa-users"></i><span>Users</span></a></li>
            <li class="{{ request()->routeIs('tamu.index') ? 'active' : '' }}"><a href="{{ route('tamu.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Tamu</span></a></li>
            <li class="{{ request()->routeIs('kunjungan.index') ? 'active' : '' }}"><a href="{{ route('kunjungan.index') }}" class="nav-link"><i class="fas fa-calendar-check"></i><span>Kunjungan</span></a></li>
            <li class="{{ request()->routeIs('kesansaran.index') ? 'active' : '' }}"><a href="{{ route('kesansaran.index') }}" class="nav-link"><i class="fas fa-comment"></i><span>Kesan & Saran</span></a></li>
        </ul>





    </aside>
</div>
