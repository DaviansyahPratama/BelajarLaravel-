<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                            <svg class="icon icon-xs" x-description="Heroicon icon: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
                </div>
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded-circle">
                                <img alt="Image placeholder" src="{{ asset('storage/' . Auth::user()->avatar) ? : asset('assets/admin/img/team/profile-picture-3.jpg') }}">
                            </div>
                            <div class="d-none d-lg-block ms-2">
                                <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            My Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-.21-.82-.19-1.09.07L4 9.4A.905.905 0 003 10a.905.905 0 001.09.58 2.28 2.28 0 00.1.06 2.28 2.28 0 00.1.06l5.77 5.77a1.4 1.4 0 001.09.43 1.4 1.4 0 001.09-.43l3.77-3.77a.905.905 0 00.58-1.09.905.905 0 00-.58-1.09l-3.77-3.77a1.4 1.4 0 00-1.09-.43 1.4 1.4 0 00-1.09.43l-.77.77a1 1 0 001.41 1.41l.77-.77a.4.4 0 01.57 0 .4.4 0 010 .57l-1.41 1.41 1.41 1.41 1.41 1.41-1.41 1.41-1.41 1.41a1 1 0 00-1.41 1.41l1.41 1.41a1 1 0 001.41 0l3.77-3.77a2.9 2.9 0 001.78-2.71 2.9 2.9 0 00-1.78-2.71l-5.77-5.77a2.9 2.9 0 00-1.78-.71 2.9 2.9 0 00-1.78.71L4.85 4.85a.905.905 0 001.09-.58 2.28 2.28 0 00.1-.06 2.28 2.28 0 00.1-.06l5.77-5.77a1.4 1.4 0 001.09-.43 1.4 1.4 0 001.09.43l3.77 3.77a2.9 2.9 0 001.78 2.71 2.9 2.9 0 00-1.78 2.71l-5.77 5.77a1.4 1.4 0 00-1.09.43 1.4 1.4 0 00-1.09.43L4.85 4.85z" clip-rule="evenodd" />
                            </svg>
                            Settings
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>