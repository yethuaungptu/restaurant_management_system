<ul id="gn-menu" class="gn-menu-main">
    <li class="gn-trigger">
        <a id="menu-toggle" class="menu-toggle gn-icon gn-icon-menu">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="cross">
                <span></span>
                <span></span>
            </div>
        </a>
        <nav class="gn-menu-wrapper">
            <div class="gn-scroller">
                <ul class="gn-menu metismenu">
                    <li class="active">
                        <a href="{{ url('/menus') }}" aria-expanded="true"><i class="fa fa-th"></i>Menus<span class="fa arrow"></span></a>
                        <ul class="gn-submenu collapse" aria-expanded="true">
                            <li><a class="active" href="{{ url('/menus') }}">Menus List</a></li>
                            <li><a href="{{ url('/menus/create') }}">Menus Add</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/staffs') }}" aria-expanded="false">
                            <i class="fa fa-users"></i>Staffs
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="gn-submenu collapse" aria-expanded="false">
                            <li><a href="{{ url('/staffs') }}">Staff List</a></li>
                            <li><a href="{{ url('/staffs/create') }}">Staff Add</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/staffs') }}" aria-expanded="false">
                            <i class="fa fa-cart-plus"></i>Sale
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="gn-submenu collapse" aria-expanded="false">
                            <li><a href="{{ url('/sales') }}">Sale Management Daily</a></li>
                            <li><a href="{{ url('/daily') }}">Daily Sale</a></li>
                            <li><a href="{{ url('/monthly') }}">Monthly Sale</a></li>
                            <li><a href="{{ url('/yearly') }}">Yearly Sale</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/category') }}" aria-expanded="false">
                            <i class="fa fa-tasks"></i>Category
                        </a>
                    </li>

                </ul>
            </div>
            <!-- /gn-scroller -->
            <div class="bottom-bnts">
                <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-power"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>
    </li>
    <li>
        <a href="{{ url('/home') }}"  class="logo">Restaurant Management System<i class="fa fa-toggle-on"></i></a>
    </li>
    <li class="top-clock">
        <span class="current-time"></span>
    </li>
    <li class="pull-right">
        <ul class="nav navbar-right right-menu">
            <li class="dropdown some-btn">
                <a class="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </a>
            </li>
        </ul>
    </li>
</ul>

    <!--Content-->




