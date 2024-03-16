<header id="header" class="header"> 
    <div class="menu"> 
        <nav id="menu-1" class="mega-menu"> 
            <section class="menu-list-items"> 
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-lg-12 col-md-12"> 
                            <ul class="menu-logo"> 
                                <li class="head-info"> 
                                    <a href="{{ route('home') }}"> 
                                    <!-- <i class="flaticon-dinner"></i>  -->
                                    <!-- <span style="color: #FFF; font-size: 20px; font-weight: bold;">Uma's Authentic Kitchen</span> -->
                                    <img id="logo_img" src="img/logo1.png" alt="logo">     
                                    </a>
                                </li>
                            </ul> 
                            <ul class="menu-links"> 
                                <li><a class="menu-style menu-li-a {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">HOME </a></li>
                                <li><a class="menu-style menu-li-a {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">ABOUT US</a></li>    
                                <li><a class="menu-style menu-li-a {{ request()->is('menu') ? 'active' : '' }}" href="{{ route('menu') }}">MENU</a></li>
                                <li><a class="menu-style menu-li-a {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">CONTACT</a></li>
                                <li><a class="menu-book-table-btn btn-bg" href="#" style="font-weight: 700; font-family: 'Courier New', Courier, monospace; padding:8px 20px; line-height:30px; margin-top:10px; color:#FFF; margin-bottom:8px;">+91 7386240132</a></li>
                                <!-- <li> <a class="menu-style menu-li-a" href="#"> PAGES 
                                        <i class="fa fa-angle-down fa-indicator"></i></a> 
                                        <ul class="drop-down-multilevel"> 
                                            <li><a class="menu-li-a-drop" href="#">About us</a></li>
                                            <li><a class="menu-li-a-drop" href="#">Event</a></li>
                                            <li><a class="menu-li-a-drop" href="#">Recipes</a></li>
                                        </ul> 
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </section> 
        </nav> 
    </div>
</header> 