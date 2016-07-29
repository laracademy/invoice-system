<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="#"><i class="ti-pie-chart"></i> Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-lock"></i>
                        <p>Account ({{ Auth::user()->email }})<b class="caret"></b></p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>