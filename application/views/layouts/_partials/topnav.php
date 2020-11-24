<form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
</form>
<ul class="navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url('assets/img/avatar.png') ?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?= $users['name']; ?></div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">
                {{-- @if (Auth::user()->remember_token == NULL)
                <span class="text-danger">Akun Belum Verifikasi</span>
                @else
                @endif --}}
                <span class="text-success">Akun Terverifikasi</span>
            </div>
            <a href="<?= base_url('setting') ?>" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </li>
</ul>