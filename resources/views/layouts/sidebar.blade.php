<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand bg-success">
      <a class="text-white" href="/">INVENTORI</a>
    
    </div>
    <div class="sidebar-brand bg-success sidebar-brand-sm">
      <a class="text-white" href="/">INV</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li><a class="nav-link {{ request()->is('dashboard*') ? 'active' : ''}}" href="#"><i class="fas fa-fire"></i> <span> Dashboard</span></a></li>
        
        <li class="menu-header">Master</li>
        <li><a class="nav-link {{ request()->is('barang*') ? 'active' : ''}}" href="#"><i class="fas fa-briefcase"></i> <span> Barang</span></a></li>
        <li><a class="nav-link {{ request()->is('tempat*') ? 'active' : ''}}" href="#"><i class="fas fa-map-marker-alt"></i> <span> Tempat</span></a></li>
        
        <li class="menu-header">Inventaris</li>
        <li><a class="nav-link {{ request()->is('transaksi-masuk*') ? 'active' : ''}}" href="#"><i class="fas fa-download"></i> <span> Barang Masuk</span></a></li>
        <li><a class="nav-link {{ request()->is('transaksi-keluar*') ? 'active' : ''}}" href="#"><i class="fas fa-upload"></i> <span> Barang Keluar</span></a></li>

        <li class="menu-header">Peminjaman</li>
        <li><a class="nav-link {{ request()->is('transaksi-masuk*') ? 'active' : ''}}" href="#"><i class="fas fa-hand-holding"></i> <span> Pinjam</span></a></li>
        <li><a class="nav-link {{ request()->is('transaksi-keluar*') ? 'active' : ''}}" href="#"><i class="fas fa-upload"></i> <span> Pengembilian</span></a></li>
        
        <li class="menu-header">Setting</li>
        <li><a class="nav-link {{ request()->is('user*') ? 'active' : ''}}" href="#"><i class="fas fa-users"></i> <span> User</span></a></li>
        <li><a class="nav-link {{ request()->is('setting*') ? 'active' : ''}}" href="#"><i class="fas fa-wrench"></i> <span> Setting</span></a></li>  
      </ul>
  </aside>
</div>