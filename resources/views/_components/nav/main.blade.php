       <nav class="nav has-shaddow navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="nav-item" href="{{ route('home') }}">
                       <img src="{{ asset('image/logo.png') }}" alt="Zixuan Log" />
                    </a>

                    <div class="navbar-burger burger" data-target="navMenubd-example">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                </div>
                <div class="navbar-menu" id="navMenubd-example">
                    <div class="navbar-start">
                        <a href="" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                        <a href="" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                        <a href="" class="nav-item is-tab is-hidden-mobile">Share</a>
                    </div>
                    <div class="navbar-end">
                        @if(Auth::guest())
                            <a href="/login" class="nav-item is-tab">Login</a>
                            <a href="/register" class="nav-item is-tab">Join my discussion</a>
                        @else
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link  is-active">
                                    Hey {{ Auth::user()->name }}!
                                </a>
                                <div class="navbar-dropdown ">
                                    <a href="#" class="navbar-item">
                                        <span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>
                                        Profile
                                    </a>
                                    <a href="#" class="navbar-item">
                                        <span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                                        Notification
                                    </a>
                                    <a href="{{ route('manage.dashboard') }}" class="navbar-item">
                                        <span class="icon"><i class="fa fa-fw fa-cog"></i></span>
                                        Manage
                                    </a>
                                    <hr class="navbar-divider">
                                    <div>                
                                        <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
