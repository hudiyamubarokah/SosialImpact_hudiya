<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

        <li class="active"><a class="nav-link" href="{{ route('admin_home') }}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

<li class="nav-item dropdown active">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Users</span></a>
    <ul class="dropdown-menu">
        <li class="active"><a class="nav-link" href="{{ route('admin.transaksi_index') }}"><i class="fas fa-angle-right"></i>Daftar Transaksi</a></li>
        <li class="active"><a class="nav-link" href="{{ route('admin.donasi_index') }}"><i class="fas fa-angle-right"></i>Daftar Donor</a></li>
        <li class="active"><a class="nav-link" href="{{ route('admin.campaigns_index') }}"><i class="fas fa-angle-right"></i>Daftar Kampanye</a></li>
        <li class="active"><a class="nav-link" href="{{ route('admin.reports.index') }}"><i class="fas fa-angle-right"></i>Laporan</a></li>
    </ul>
</li>
        </ul>
    </aside>
</div>