<!-- sidebar -->
<div class="sidebar" data-background-color="white" data-active-color="danger">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}" class="simple-text">
                Invoice System
            </a>
        </div>

        <ul class="nav">
            <li class="{{ Request::is('/') ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="ti-pie-chart"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::is('client*') ? 'active' : '' }}">
                <a href="{{ route('client') }}">
                    <i class="ti-user"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li class="{{ Request::is('projects*') ? 'active' : '' }}">
                <a href="{{ route('project') }}">
                    <i class="ti-book"></i>
                    <p>Projects</p>
                </a>
            </li>
            <li class="{{ Request::is('invoice*') ? 'active' : '' }}">
                <a href="{{ route('invoice') }}">
                    <i class="ti-receipt"></i>
                    <p>Invoices</p>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- sidebar -->