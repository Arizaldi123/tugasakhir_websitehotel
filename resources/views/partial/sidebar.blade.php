<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/dashboard">Hotel Hebat</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/dashboard">HH</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="{{ Request::is('dashboard') ? 'active' : ''}}"><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
          <li class="menu-header">Data Hotel</li>
          <li class="{{ Request::is('kamar') ? 'active' : ''}}"><a class="nav-link" href="/kamar"><i class="fas fa-bed"></i> <span>Kamar</span></a></li>
          <li class="{{ Request::is('fasilitas-kamar') ? 'active' : ''}}"><a class="nav-link" href="/fasilitas-kamar"><i class="fas fa-th"></i> <span> Fasilitas Kamar</span></a></li>
          <li class="{{ Request::is('fasilitas-hotel') ? 'active' : ''}}"><a class="nav-link" href="/fasilitas-hotel"><i class="fas fa-hotel"></i> <span>Fasilitas Hotel</span></a></li>
        </ul>

    </aside>
  </div>