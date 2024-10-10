<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/logo-full.png" alt="" class="logo logo-lg">
                <img src="assets/images/logo-abbr.png" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="index.html">CRM</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="analytics.html">Analytics</a></li>
                    </ul>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">Customers</span><span class="nxl-arrow"><i
                                class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link" href="/customers">Customers</a></li>
                        <li class="nxl-item"><a class="nxl-link" href="/customers_create">Customers
                                Create</a></li>
                    </ul>
                </li>

                <li class="nxl-item nxl-hasmenu">
                    <form action="/logout" method="POST" class="nxl-link">
                        @csrf
                        <button type="submit" class="btn btn-danger ">
                            <span>Logout</span>
                        </button>
                    </form>

                </li>
            </ul>

        </div>
    </div>
</nav>
