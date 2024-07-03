<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @can('user_index')
                    <div class="sb-sidenav-menu-heading">User Management</div>
                    <a class="nav-link" href="{{ route('admin.users.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        {{ __('backend.users') }}
                    </a>
                @endcan
                @can('permissions_index')
                    <a class="nav-link" href="{{ route('admin.permission.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Role
                    </a>
                @endcan
                <div class="sb-sidenav-menu-heading">Sub tablelar</div>
                @can('project_index')
                    <a class="nav-link" href="{{ route('admin.projects.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-diagram-project"></i></div>
                        {{ __('backend.projects') }}
                    </a>
                @endcan
                @can('partner_index')
                    <a class="nav-link" href="{{ route('admin.partner.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-handshake"></i></div>
                        {{ __('backend.partners') }}
                    </a>
                @endcan
                @can('fil_index')
                    <a class="nav-link" href="{{ route('admin.filillar.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-earth-americas"></i></div>
                        {{ __('backend.fill') }}
                    </a>
                @endcan
                @can('vacancy_index')
                    <a class="nav-link" href="{{ route('admin.vacancy.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users-line"></i></div>
                        {{ __('backend.vacancy') }}
                    </a>
                @endcan
                @can('product_index')
                    <a class="nav-link" href="{{ route('admin.products.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-brands fa-dropbox"></i></div>
                        {{ __('backend.products') }}
                    </a>
                @endcan
                @can('doc_index')
                    <a class="nav-link" href="{{ route('admin.docs.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-doc"></i></div>
                        Documents
                    </a>
                @endcan
                @can('contact_index')
                    <a class="nav-link" href="{{ route('admin.contact.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div>
                        {!! __('backend.contact') !!}
                    </a>
                @endcan
                @can('news_index')
                    <a class="nav-link" href="{{ route('admin.blogs.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-print"></i></div>
                        {{ __('backend.blogMenu') }}
                    </a>
                @endcan
                <a class="nav-link" href="{{ route('admin.comment.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-comments"></i></div>
                    {{ __('backend.comment') }}
                </a>


            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth()->user()->name }}
        </div>
    </nav>
</div>
