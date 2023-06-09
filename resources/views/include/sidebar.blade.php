{{-- <div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="has-child open">
                    <a href="{{route('profile')}}" class="active">
                        <span class="menu-text">Dashboard</span>
                    </a>
                   
                </li>

                <li class="has-child open">
                    <a href="{{route('view_rating')}}" class="active">
                        <span class="menu-text">View Rating</span>
                    </a>
                   
                </li>


            </ul>
        </div>
    </div>
</div> --}}

<div class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
            

                <li class="menu-title mt-30">
                    <span>RATING MENU</span>
                </li>
                
                <li class="l_sidebar">
                    <a href="{{route('ratings_analysis')}}">Dashboard</a>
                </li>

                <li class="l_sidebar">
                    <a href="{{route('profile')}}">Product</a>
                </li>

                <li class="l_sidebar">
                    <a href="{{route('view_rating')}}">View all Rating</a>
                </li> 
                
               
               
            </ul>
        </div>
    </div>
</div>