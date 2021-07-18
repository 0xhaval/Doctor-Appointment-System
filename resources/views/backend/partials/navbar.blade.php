<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="{{ asset('image/vector.png') }}" width="50%"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{ Auth::user()->name }}</span>
                        <span class="text-muted text-xs block">Admin <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('admin.user.edit', Auth::user()->id) }}">Setting</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    DA+
                </div>
            </li>
            <li class="active">
                <a href="{{ route('admin.home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Admins</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.user.index') }}">Show</a></li>
                    <li><a href="{{ route('admin.user.create') }}">Add</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-user-md"></i> <span class="nav-label">Doctor</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.doctor.index') }}">Show</a></li>
                    <li><a href="{{ route('admin.doctor.create') }}">Add</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-user-md"></i> <span class="nav-label">Midical Lab</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.medical.index') }}">Show</a></li>
                    <li><a href="{{ route('admin.medical.create') }}">Add</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Patient</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.patient.index') }}">Show</a></li>
                    <li><a href="{{ route('admin.patient.create') }}">Add</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Appointment</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('admin.appointment.index') }}">Show</a></li>
                    <li><a href="{{ route('admin.appointment.create') }}">Add</a></li>
                    <li><a href="{{ route('admin.appointment.report') }}">Report</a></li>
                </ul>
            </li>



        </ul>

    </div>
</nav>
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        <form role="search" class="navbar-form-custom" action="search_results.html">
            <div class="form-group">
                <span class="pl-3 pt-2" id="demo"></span>
                <h3 class=" pl-3" id="time"></h3>
                <script type="text/javascript">
                function showTime() {
                    document.getElementById('time').innerHTML = new Date().toLocaleString();

                    var d = new Date();
                    var weekday = new Array(7);
                    weekday[0] = "Sunday";
                    weekday[1] = "Monday";
                    weekday[2] = "Tuesday";
                    weekday[3] = "Wednesday";
                    weekday[4] = "Thursday";
                    weekday[5] = "Friday";
                    weekday[6] = "Saturday";

                    var n = weekday[d.getDay()];
                    document.getElementById("demo").innerHTML = n;
                }

                setInterval(showTime, 1000);
                </script>
            </div>
        </form>
    </div>
        <ul class="nav navbar-top-links navbar-right">
            <li style="padding: 20px">
                <span class="m-r-sm text-muted welcome-message">Welcome to DOCTOR APPOINTMENT+ Admin Dashboard.</span>
            </li>

            <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> Log out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>

    </nav>
</div>
