<aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('images/icon/logo-white.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="{{asset('images/icon/avatar-big-01.jpg')}}" alt="John Doe" />
                    </div>
                    <h4 class="name">Admin</h4>
                    <a href="#">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('home') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <!-- <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span> -->
                            </a>
                           <!--  <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Inventory
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        Statistics</a>
                                </li>
                                <li>
                                    <a href="{{ route('categories.index') }}">
                                       Category</a>
                                </li>
                                <li>
                                    <a href="{{ route('products.index') }}">
                                        Products</a>
                                </li>
                                <!-- <li>
                                    <a href="index4.html">
                                        Stock</a>
                                </li>
                                <li>
                                    <a href="index4.html">
                                        Stock Reports</a>
                                </li> -->

                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-shopping-basket"></i>Purchase
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        Statistics</a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        New Purchase</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        Manage Purchase</a>
                                </li>
                               <!--  <li>
                                    <a href="index3.html">
                                        Purchaase Reports</a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="has-sub">
                           <a class="js-arrow" href="#">
                                <i class="fa fa-sitemap" aria-hidden="true"></i>Sale
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        Statistics</a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        New Sale</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        Manage Sale</a>
                                </li>
                               <!--  <li>
                                    <a href="index3.html">
                                        Reports</a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-list" aria-hidden="true"></i>Finance
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        Statistics</a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        Add Expenses</a>
                                </li>
                                <li>
                                    <a href="index.html">
                                        Manage Expenses</a>
                                </li>
                               <!--  <li>
                                    <a href="index.html">
                                    Expenses Report</a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-trophy"></i>Administrater
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        Statistics</a>
                                </li>
                                <li>
                                    <a href="">
                                        Add Employees</a>
                                </li>
                                <li>
                                    <a href="">
                                        Manage Employees</a>
                                </li>
                                <li>
                                    <a href="#">
                                        Salary</a>
                                </li>
                                <li>
                                    <a href="{{ route('accounts.index') }}">
                                        Accounts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>General
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('clients.index') }}">
                                        Clients</a>
                                </li>
                                <li>
                                    <a href="{{ route('suppliers.index') }}">
                                        Supplier</a>
                                </li>
                                <!-- <li>
                                    <a href="index3.html">
                                        Users</a>
                                </li>
                            </ul>
                        </li>
                        <li> -->
                            <i class="fas fa-sign-out"></i> <a class="js-arrow" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>