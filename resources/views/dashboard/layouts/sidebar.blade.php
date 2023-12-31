<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <i class="bi bi-house align-text-bottom"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" aria-current="page" href="/dashboard/posts">
                    <i class="bi bi-layout-text-sidebar align-text-bottom"></i>
                    My Posts
                </a>
            </li>
        </ul>
        @can('admin')
            <h6 class="sidebar-heading d-flex justiify-content-between align-items-center px-3 mt-4 mb-1 text-secondary">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
                        <i class="bi bi-grid align-text-bottom"></i>
                        Post Categories
                    </a>
                </li>
            </ul>
        @endcan
    </div>
</nav>