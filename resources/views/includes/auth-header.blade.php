
    <div class="nav-container container-fluid shadow-sm">
        <nav
            class="navbar nav-top navbar-expand-lg navbar-light container-md px-0"
        >
            <a class="navbar-brand" href="#">
                <img src="{{ URL::to('/') }}/img/Logo 01 Main 01.svg" width="81px" height="44px" />
            </a>
            <button
                class="navbar-toggler order-2"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center top-navigation">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link px-4 dropdown-toggle text-center"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >Lend</a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink"
                        >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link px-4 dropdown-toggle text-center"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >Borrow</a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuLink"
                        >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#">About</a>
                    </li>
                    <button
                        class="btn btn-fml-secondary align-self-center nav-item view-dashboard-btn"
                    >
                        View Dashboard
                    </button>
                </ul>
            </div>
            <div class="navbar-nav flex-row">
                <a class="nav-item nav-link px-4">
                    <img src="{{ URL::to('/') }}/img/user-photo.png" />
                </a>
                <a class="nav-item nav-link pr-0 align-self-center" href="#">
                    <div class="position-relative">
                        <img
                            src="{{ URL::to('/') }}/img/notification-dot.svg"
                            alt="new notifications"
                            class="position-absolute notification-dot"
                        />
                        <img
                            src="{{ URL::to('/') }}/img/notification.svg"
                            class="notification-icon"
                            alt="notification icon"
                        />
                    </div>
                </a>
            </div>
            <div class="navbar-nav flex-row">
            <a class="nav-link pl-md-4 font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <button class="btn btn-fml-secondary align-self-center nav-item view-dashboard-btn">
                        Logout
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </a>
            </div>
        </nav>
    </div>
