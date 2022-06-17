<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('admin/images/icon/logo.png')}}" alt="Mini CRM" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="@if (Request::segment(1) == '') active bg-gradient-primary @endif">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-chart-line"></i>
                        Dashboard
                    </a>
                </li>
                <li class="has-sub @if (Request::segment(1) == 'company') active bg-gradient-primary @endif">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        Company
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li class="@if (Request::segment(2) == 'index') active bg-gradient-primary @endif">
                            <a href="{{ route('company.index') }}">Index</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub @if (Request::segment(1) == 'employee') active bg-gradient-primary @endif">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        Employee
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li class="@if (Request::segment(2) == 'index') active bg-gradient-primary @endif">
                            <a href="{{ route('employee.index') }}">Index</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub @if (Request::segment(1) == 'system') active bg-gradient-primary @endif">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>
                        System
                    </a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li class="@if (Request::segment(2) == 'activity') active bg-gradient-primary @endif">
                            <a href="{{ route('activity.index') }}">Audit Log</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>