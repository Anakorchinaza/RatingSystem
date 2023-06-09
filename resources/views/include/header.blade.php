<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <div class="logo-area">
                <div class="logo-area">
                    <a class="navbar-brand" href="{{route('profile')}}">
                       <h2>Rating System</h2>
                    </a>
                    <a href="#" class="sidebar-toggle">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
            </div>
        
            
        </div>

        <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-search">
                    <a href="#" class="search-toggle">
                        <i class="uil uil-search"></i>
                        <i class="uil uil-times"></i>
                    </a>
                
                </li>
                
        
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><i class="fa-solid fa-user"></i>
                            
                            <span class="nav-item__title">{{ Auth::user()->name }}<i
                                    class="las la-angle-down nav-item__arrow"></i></span>
                        </a>
                        <div class="dropdown-parent-wrapper">
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div>
                                        <h6>{{ Auth::user()->name }}</h6>
                                        
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    
                                    <a href="{{route('logout')}}" class="nav-author__signout">
                                        <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>

            </ul>

            
        </div>

    </nav>
</header>

