<header class="sdm__header sdm__box">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="https://sdmstaging.5bb.com.mm/dashboard/index">
            <i class="fa-solid fa-desktop"></i>
        </a>
        <div class="d-flex align-items-center gap-4">
            <div class="d-flex gap-2">
                <div class="dropdown">
                    <button class="btn btn-sm btn-outline dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        <span style="font-size: 0.8rem">Nyi Ye Zin</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="https://sdmstaging.5bb.com.mm/dashboard/update-password" method="post">
                                <button class="dropdown-item btn btn-sm btn-outline" href="#">Change
                                    Password</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline">
                        <i class="fa-solid fa-bell"></i>
                    </button>
                    <div class="notification-list-container" style="display: none;">
                        <div class="nav-dropdown-container">
                            <div class="notification-list">
                                <div class="noti-see-all">
                                    <a>See All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form>
                <button class="btn btn-sm btn-danger" href="https://sdmstaging.5bb.com.mm/logout"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Log Out
                </button>
            </form>
            <form id="logout-form" action="https://sdmstaging.5bb.com.mm/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="dUattu8p8xNcG9c8Or0LRaooHPJZZmnD86Bwo3wh" />
            </form>
        </div>
    </div>

</header>
