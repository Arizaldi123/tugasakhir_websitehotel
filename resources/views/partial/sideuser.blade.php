<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/home">Hotel Hebat</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/home">HH</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="{{ Request::is('home') ? 'active' : ''}}"><a class="nav-link" href="/home"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
          <li class="menu-header">Opsi Pemesanan</li>
          <li class="{{ Request::is('pemesanan') ? 'active' : ''}}"><a class="nav-link" href="/pemesanan"><i class="fas fa-pencil-ruler"></i> <span>Pemesanan</span></a></li>
          <li class="{{ Request::is('histori-pemesanan') ? 'active' : ''}}"><a class="nav-link" href="/histori-pemesanan"><i class="fas fa-history"></i> <span>Histori Pemesanan</span></a></li>
        </ul>

    </aside>
  </div>