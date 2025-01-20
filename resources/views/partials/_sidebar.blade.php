<aside id="scrollSidebar" class="sdm-sidebar">
    <a>
        <div class="sdm-sidebar__logo">
            <img src="/images/sdm_logo.png" />
        </div>
    </a>
    <div class="sdm-sidebar__items">
        <a @class([
            'sdm-sidebar__item',
            'active' => request()->routeIs('newDashboard'),
        ]) href="{{ route('newDashboard') }}">
            <span>
                <i class="fa-solid fa-tv"></i>
            </span>
            Dashboard
        </a>

        <a @class([
            'sdm-sidebar__item',
            'active' => request()->routeIs('installation'),
        ]) href="{{ route('installation') }}">
            <span>
                <i class="fa-solid fa-wrench"></i>
            </span>
            Installation
        </a>
        <a @class([
            'sdm-sidebar__item',
            'active' => request()->routeIs('oncall'),
        ]) href="{{ route('oncall') }}">
            <span>
                <i class="fa-solid fa-phone"></i>
            </span>
            On Call
        </a>
        @php
            $isPortsSubmenuActive =
                request()->routeIs('odn') || request()->routeIs('ticket') || request()->routeIs('ticketCreate') || request()->routeIs('ticketShow');
        @endphp
        <div>
            <a class="sdm-sidebar__item sdm-sidebar__items-group__toggler {{ $isPortsSubmenuActive ? 'expanded' : '' }}"
                id="portsSubMenuToggler" href="#portsSubMenu" data-toggle="collapse"
                aria-expanded="{{ $isPortsSubmenuActive ? 'true' : 'false' }}">
                <i class="fa-solid fa-caret-{{ $isPortsSubmenuActive ? 'down' : 'right' }}"></i>
                Ports
            </a>
            <ul class="collapse sdm-sidebar__items-group {{ $isPortsSubmenuActive ? 'show' : '' }}" id="portsSubMenu">
                <li>
                    <a @class([
                        'sdm-sidebar__subitem',
                        'active' => request()->routeIs('odn'),
                    ]) href="{{ route('odn') }}">
                        ODN
                    </a>
                </li>
                <li>
                    <a @class([
                        'sdm-sidebar__subitem',
                        'active' =>
                            request()->routeIs('ticket') ||
                            request()->routeIs('ticketCreate') ||
                            request()->routeIs('ticketShow'),
                    ]) href="{{ route('ticket') }}">
                        Ticket
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const portsSubMenuToggler = document.getElementById('portsSubMenuToggler');
        const portsSubMenu = document.getElementById('portsSubMenu');
        const caretIcon = portsSubMenuToggler.querySelector('i');

        function updateCaret() {
            if (portsSubMenu.classList.contains('show')) {
                caretIcon.classList.remove('fa-caret-down');
                caretIcon.classList.add('fa-caret-right');
            } else {
                caretIcon.classList.remove('fa-caret-right');
                caretIcon.classList.add('fa-caret-down');
            }
        }

        portsSubMenuToggler.addEventListener('click', () => {
            updateCaret()
        });

    });
</script>
