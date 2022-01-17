<header class="header">
    <div id="header-topbar" class="bg-Primary">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="header-topbar-layout1">
                        <ul class="header-top-left">
                            <li class="social-icon">
                                <a target="_blank" href="{{ setting('top_header_section_facebook') }}"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="{{ setting('top_header_section_twitter') }}"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="{{ setting('top_header_section_linked_in') }}"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="{{ setting('top_header_section_google') }}"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <li class="opening-hour"><i class="far fa-clock"></i>{{ setting('top_header_section_from_day') }} -  {{ setting('top_header_section_to_day') }}: {{ setting('top_header_section_start_time') }} - {{ setting('top_header_section_end_time') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <div class="header-topbar-layout1">
                        <div class="header-top-right">
                            <a href="{{ route('quote') }}" class="header-top-btn @routeis('home') get_quote_home @endrouteis"><i class="fas fa-bell"></i>{{ setting('top_header_section_get_quote_text') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="rt-sticky-placeholder"></div>
    <div id="header-menu" class="header-menu menu-layout1">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo-area">
                        <a href="{{ route('home') }}" class="temp-logo">
                            <img src="{{ asset(setting('logo_section_logo')) }}" alt="logo" class="img-fluid logo_header_image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-end position-static">
                    <nav id="dropdown" class="template-main-menu">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}" class="@routeis('home') active @endrouteis">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Services</a>
                                <ul class="dropdown-menu-col-1">
                                    @foreach(getCategories('active') as $item)
                                        <li>
                                            <a href="{{ route('detail', $item->slug) }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="@routeis('about') active @endrouteis">About</a>
                            </li>
                           
                            <li>
                                <a href="{{ route('faqs') }}" class="@routeis('faqs') active @endrouteis">FAQs</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="@routeis('contact') active @endrouteis">Contact</a>
                            </li>
                             @if(!isAuth())
                                {{-- <li>
                                    <a href="{{ route('login') }}" class="@routeis('login') active @endrouteis">Log In</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Sign Up</a>
                                </li> --}}
                            @else
                                @if(authUser()->role == 'admin')
                                    <li>
                                        <a href="javascript:void(0);"> {{ authUser()->name }} </a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a target="_blank" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="logout_user">Logout</a>
                                                <form action="{{ route('logout') }}" class="logout_form" method="POST">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                @if(authUser()->role == 'user')
                                    <li>
                                        <a href="javascript:void(0);"> {{ authUser()->name }} </a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="javascript:void(0);">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 d-flex justify-content-end">
                    <div class="header-action-layout1">
                        <ul>
                            <li class="header-action-number">
                                
                                    <div class="item-icon">
                                        <a href="tel:{{ setting('top_header_section_quick_contact_number') }}"><i class="flaticon-phone-call"></i></a>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-title">{{ setting('top_header_section_quick_contact_title') }}</div>
                                        <div class="item-number">
                                            <a href="tel:{{ setting('top_header_section_quick_contact_number') }}" class="black_color">
                                                {{ setting('top_header_section_quick_contact_number') }}
                                            </a>
                                        </div>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>