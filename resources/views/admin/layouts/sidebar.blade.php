<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">User Management</div>
                <a class="nav-link" href="{{route('admin.users.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Users
                </a>
                <div class="sb-sidenav-menu-heading">Sub tablelar</div>
                <a class="nav-link" href="{{route('admin.projects.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Projectlar
                </a>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
