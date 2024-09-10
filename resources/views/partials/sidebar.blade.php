<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed {{ request()->is('parokia') || request()->is('religio') || request()->is('cathedra') || request()->is('charisma') ? 'active' : '' }}" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-box-seam"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="products-nav" class="nav-content collapse {{ request()->is('parokia') || request()->is('religio') || request()->is('cathedra') || request()->is('charisma') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/parokia" class="{{ request()->is('parokia') ? 'active' : '' }}">
                        <i class="bi bi-house-door"></i><span>Parokia</span>
                    </a>
                </li>
                <li>
                    <a href="/religio" class="{{ request()->is('religio') ? 'active' : '' }}">
                        <i class="bi bi-book"></i><span>ReligiO</span>
                    </a>
                </li>
                <li>
                    <a href="/cathedra" class="{{ request()->is('cathedra') ? 'active' : '' }}">
                        <i class="bi bi-bank"></i><span>Cathedra</span>
                    </a>
                </li>
                <li>
                    <a href="/charisma" class="{{ request()->is('charisma') ? 'active' : '' }}">
                        <i class="bi bi-star"></i><span>Charisma</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-heading">Auth</li>

        <li class="nav-item">
            <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="/users">
                <i class="bi bi-people"></i>
                <span>Users</span>
            </a>
        </li>

        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="nav-link collapsed" style="border: none; background: none;">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                </button>
            </form>
        </li>

    </ul>

</aside>
