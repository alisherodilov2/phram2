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
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-diagram-project"></i></div>
                    Projectlar
                </a>
                <a class="nav-link" href="{{route('admin.partner.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-handshake"></i></div>
                    Partners
                </a>
                <a class="nav-link" href="{{route('admin.filillar.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-earth-americas"></i></div>
                    Filillar
                </a>
                <a class="nav-link" href="{{route('admin.vacancy.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users-line"></i></div>
                    {{ __('backend.vacancy') }}
                </a>
                <a class="nav-link" href="{{route('admin.products.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-brands fa-dropbox"></i></div>
                    Products
                </a>

                <a class="nav-link" href="{{route('admin.contact.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div>
                    {!! __('backend.contact') !!}
                </a>
                <a class="nav-link" href="{{route('admin.blogs.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-print"></i></div>
                    {{ __('backend.blogMenu') }}
                </a>
                <a class="nav-link" href="{{route('admin.comment.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-comments"></i></div>
                    Comment
                </a>
                
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{auth()->user()->name}}
        </div>
    </nav>
</div>
