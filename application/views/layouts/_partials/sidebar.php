<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="<?= base_url('dashboard') ?>">SIFUT</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="">SIF</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">dashboard</li>
        <li class="active">
            <a class="nav-link" href="">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="menu-header">Master Data</li>
        <li class="dropdown">
            <a class="nav-link has-dropdown" href="">
                <i class="fas fa-database"></i>
                <span>Master Data</span>
            </a>
            <ul class="dropdown-menu">
                <!-- jika login role nya operator & admin -->
                <li><a href="<?= base_url('booking/data') ?>" class="nav-link">Data Booking</a></li>
                <li><a href="#" class="nav-link">Data Member</a></li>
                <li><a href="#" class="nav-link">Data User</a></li>
                <li><a href="#" class="nav-link">Data Lapangan</a></li>
                <li><a href="#" class="nav-link">Data Harga</a></li>
                <!-- jika login role nya administrator saja -->
                <li><a href="#" class="nav-link">Data Operator</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link" href="">
                <i class="fas fa-credit-card"></i>
                <span>Payments</span>
            </a>
        </li>
        <li class="menu-header">Pengaturan</li>
        <li>
            <a class="nav-link" href="">
                <i class="fas fa-cog"></i>
                <span>Setting</span>
            </a>
        </li>
        <li>
            <a class="nav-link text-danger" href="<?= base_url('auth/logout') ?>">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</aside>