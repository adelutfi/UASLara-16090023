<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="index.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>

                     <li>
                        <a href="{{route('datapendaftaran')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Data Pendaftaran</span></a>
                    </li>
                   {{--  <li><a class="waves-effect"><i class="fa fa-user" aria-hidden="true"><span class="hide-menu">Data Pendaftar</span></i></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('pendidikan')}}">Pendidikan</a></li>
                            <li><a href="{{route('biodata')}}">Boidata</a></li>
                        </ul>
                    </li> --}}

                     <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="waves-effect"><i class="fa fa-power-off fa-fw" aria-hidden="true"></i><span class="hide-menu">Logout</span></a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                    </li>
                   
                </ul>
            </div>
        </div>