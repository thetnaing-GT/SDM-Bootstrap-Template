<header class="dashboard__header">
    <div class="dashboard__header__setting container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <a href="https://sdmstaging.5bb.com.mm/dashboard/index" class="side-link">
                <svg class="svg-inline--fa fa-desktop fa-w-18 dashboard-icon" aria-hidden="true" focusable="false"
                    data-prefix="fas" data-icon="desktop" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512">
                    <path fill="currentColor"
                        d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z">
                    </path>
                </svg>
            </a>
            <div class="d-flex align-items-center" style="gap: 2.5rem;">
                <div class="d-flex" style="gap: 0.5rem;">
                    <form action="https://sdmstaging.5bb.com.mm/dashboard/update-password" method="post">
                        <input type="hidden" name="_token" value="dUattu8p8xNcG9c8Or0LRaooHPJZZmnD86Bwo3wh" />
                        <div>
                            <button id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"
                                style="outline: none; border: none; background: transparent; font-size: 16px;">
                                <svg class="svg-inline--fa fa-user fa-w-14" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z">
                                    </path>
                                </svg>
                            </button>
                            <div class="dropdown-menu">
                                <button name="user_id" value="280" class="bg-white"
                                    style="outline: none; border: none; padding-left: 10px; font-size: 12px;">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-0">Nyi Ye Zin</p>
                </div>
                <div class="d-flex" style="gap: 0.5rem;">
                    <div class="noti-vue">
                        <div class="noti-container">
                            <a>
                                <span class="header-user notification-icon">
                                    <svg class="svg-inline--fa fa-bell fa-w-14" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="bell" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="currentColor"
                                            d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
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
                </div>
                <p href="https://sdmstaging.5bb.com.mm/logout"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="header-logout mb-0">
                    Log Out
                </p>
                <form id="logout-form" action="https://sdmstaging.5bb.com.mm/logout" method="POST"
                    style="display: none;">
                    <input type="hidden" name="_token" value="dUattu8p8xNcG9c8Or0LRaooHPJZZmnD86Bwo3wh" />
                </form>
            </div>
        </div>
    </div>

</header>
