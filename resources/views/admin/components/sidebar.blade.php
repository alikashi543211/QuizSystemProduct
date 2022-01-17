<div class="sidebar" data-color="green" data-background-color="black" data-image="{{ asset('admin_theme') }}/assets/img/sidebar-3.jpg">
    <div class="logo">
        <a href="{{ route('home') }}" target="_blank" class="simple-text logo-normal text-center">
            <h3 class="font-weight-bold">QuizSystem</h3>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('common/images/default.png') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>Admin <b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.profile') }}">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            <li class="nav-item @routeis('admin.mcq.list') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.mcq.list') }}">
                    <i class="material-icons">category</i>
                    <p> MCQs </p>
                </a>
            </li>

            {{-- <li class="nav-item @routeis('admin.category.*') active @endrouteis">
                <a class="nav-link" data-toggle="collapse" href="#services">
                    <i class="material-icons">group</i><p> Members<b class="caret"></b></p>
                </a>
                <div class="collapse @routeis('admin.category.*') show @endrouteis" id="services">
                    <ul class="nav">
                        <li class="nav-item @routeis('admin.category.list') active @endrouteis">
                            <a class="nav-link" href="{{ route('admin.category.list') }}">
                                <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                                <span class="sidebar-normal"> Member List </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="nav-item @routeis('admin.cms.general') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.cms.general') }}">
                    <i class="material-icons">assignment_turned_in</i>
                    <p> CMS </p>
                </a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link" href="javascript:;" onclick="document.getElementById('logout-form').submit()">
                    <form id="logout-form" class="d-none" method="post" action="{{ route('logout') }}">@csrf</form>
                    <i class="material-icons">logout</i>
                    <p> Logout </p>
                </a>
            </li>
            
        </ul>
    </div>
</div>
