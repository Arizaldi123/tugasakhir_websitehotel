<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/resepsionis">Hotel Hebat</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="/resepsionis">HH</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
          <li class="{{ Request::is('dashboard-resepsionis') ? 'active' : ''}}"><a class="nav-link" href="/dashboard-resepsionis"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
          <li class="menu-header">Data Pemesanan Hotel</li>
          <li class="{{ Request::is('resepsionis') ? 'active' : ''}}"><a class="nav-link" href="/resepsionis"><i class="fas fa-th-large"></i> <span>Data Pemesanan</span></a></li>
        </ul>

    </aside>
  </div>