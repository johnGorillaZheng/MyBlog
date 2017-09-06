       <nav class="nav has-shaddow">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item" href="{{ route('home') }}">
                       <img src="{{ asset('image/logo.png') }}" alt="Zixuan Log" />
                    </a>
                    <a href="" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="" class="nav-item is-tab is-hidden-mobile">Share</a>
                </div>
                <div class="nav-right" style="overflow: visible;">
                    @if(Auth::guest())
                        <a href="/login" class="nav-item is-tab">Login</a>
                        <a href="/register" class="nav-item is-tab">Join my discussion</a>
                    @else
                        <button class="dropdown is-aligned-right nav-item is-tab">
                            Hey {{ Auth::user()->name }}! <span class="icon"><i class="fa fa-caret-down"></i></span>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                                        Notification
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><i class="fa fa-fw fa-cog"></i></span>
                                        Settings
                                    </a>
                                </li>
                                <li class="seperator"></li>
                                <li>
                                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                        <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav>