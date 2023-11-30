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
                <a class="nav-link" href="{{route('admin.partner.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Partners
                </a>
                <a class="nav-link" href="{{route('admin.filillar.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Filillar
                </a>
                <a class="nav-link" href="{{route('admin.vacancy.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Vacancy
                </a>
                <a class="nav-link" href="{{route('admin.products.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Products
                </a>

                <a class="nav-link" href="{{route('admin.contact.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Contacts
                </a>
                <a class="nav-link" href="{{route('admin.blogs.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Blogs
                </a>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{auth()->user()->name}}
        </div>
    </nav>
</div>
