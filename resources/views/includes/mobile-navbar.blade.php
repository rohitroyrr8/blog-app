    <!-- Sticky header -->
        <div id="mnmd-sticky-header" class="sticky-header site-header--skin-2 js-sticky-header">
            <!-- Navigation bar -->
            <nav class="navigation-bar navigation-bar--fullwidth navigation-bar--inverse hidden-xs hidden-sm">
                <div class="navigation-bar__inner">
                    <div class="navigation-bar__section"><a href="#mnmd-offcanvas-primary" class="offcanvas-menu-toggle navigation-bar-btn js-mnmd-offcanvas-toggle"><i class="mdicon mdicon-menu icon--2x"></i></a>
                        <div class="site-logo header-logo">
                            <a href="./"><img src="{{ asset('img/9scroob_light.png?ver=2.0') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="navigation-wrapper navigation-bar__section js-priority-nav">
                        <ul id="menu-main-menu" class="navigation navigation--main navigation--inline">

		                    <li><a href="{{url('./')}}">Home</a></li>
		                    <li class="menu-item-has-children">
		                   		<a href="{{url('./category/entertainment')}}">Entertainment</a>
				                   	<ul class="sub-menu">
				                   		<li><a href="{{url('./category/entertainment')}}">Entertainment</a></li>
				                   		<li><a href="{{url('./category/travel')}}">Travel</a></li>
					                   	<li><a href="{{url('./category/sports')}}">Sports</a></li>
					                   	<li><a href="{{url('./category/movies')}}">Movies</a></li>
				                   </ul>
		              		</li>
		                    <li class="menu-item-has-children">
		                   		<a href="{{url('./category/lifestyle')}}">Lifestyle</a>
				                   	<ul class="sub-menu">
				                   		<li><a href="{{url('./category/lifestyle')}}">Lifestyle</a></li>
				                   		<li><a href="{{url('./category/food')}}">Food</a></li>
					                   	<li><a href="{{url('./category/fashion')}}">Fashion</a></li>
					                   	<li><a href="{{url('./category/health')}}">Health</a></li>
				                   </ul>
		              		</li>
		                    <li class="menu-item-cat-3"><a href="{{url('./category/news')}}">News</a></li>
							<li class="menu-item-cat-3"><a href="{{url('./category/technology')}}">Technology</a></li>
							<li class="menu-item-cat-3"><a href="{{url('./category/review')}}">Review</a></li>
		                </ul>
                    </div>
                    <div class="navigation-bar__section">
                        <button type="submit" class="navigation-bar-btn js-search-dropdown-toggle"><i class="mdicon mdicon-search"></i></button>
                    </div>
                    <div id="header-search-dropdown" class="header-search-dropdown ajax-search is-in-navbar js-ajax-search">
                        <div class="container container--narrow">
                            <form class="search-form search-form--horizontal" method="get" action="{{route('search_posts')}}">
                                <div class="search-form__input-wrap">
                                    <input type="text" name="query" class="search-form__input" placeholder="Search" value="">
                                </div>
                                <div class="search-form__submit-wrap">
                                    <button type="submit" class="search-form__submit btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- .navigation-bar__inner -->
            </nav>
            <!-- Navigation bar -->
        </div>
        
        <!-- Off-canvas menu -->
        <div id="mnmd-offcanvas-primary" class="mnmd-offcanvas js-mnmd-offcanvas js-perfect-scrollbar">
            <div class="mnmd-offcanvas__title">
                <h2 class="site-logo"><a href="./"><img src="{{asset('img/9scroob_dark.png?ver=2.0')}}" alt="logo" width="140"></a></h2>
                <!-- <ul class="social-list list-horizontal">
                    <li><a href="#"><i class="mdicon mdicon-facebook"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-twitter"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-youtube"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-google-plus"></i></a></li>
                </ul> -->
                <a href="#mnmd-offcanvas-primary" class="mnmd-offcanvas-close js-mnmd-offcanvas-close" aria-label="Close"><span aria-hidden="true">&#10005;</span></a></div>
            <div class="mnmd-offcanvas__section mnmd-offcanvas__section-navigation">
                <ul id="menu-offcanvas-menu" class="navigation navigation--offcanvas">
                    <li><a href="{{url('./')}}">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="{{url('./category/entertainment')}}">Entertainment
                            <div class="submenu-toggle">
                                <i class="mdicon mdicon-expand_more"></i>
                            </div>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="{{url('./category/entertainment')}}">Entertainment</a></li>
                            <li><a href="{{url('./category/travel')}}">Travel</a></li>
                            <li><a href="{{url('./category/sports')}}">Sports</a></li>
                            <li><a href="{{url('./category/movies')}}">Movies</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{url('./category/lifestyle')}}">Lifestyle
                            <div class="submenu-toggle">
                                <i class="mdicon mdicon-expand_more"></i>
                            </div>
                        </a>
                        <ul class="sub-menu" style="display: none;">
                            <li><a href="{{url('./category/lifestyle')}}">Lifestyle</a></li>
                            <li><a href="{{url('./category/food')}}">Food</a></li>
                            <li><a href="{{url('./category/fashion')}}">Fashion</a></li>
                            <li><a href="{{url('./category/health')}}">Health</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="{{url('./category/news')}}">News</a></li>
                    <li><a href="{{url('./category/technology')}}">Technology</a></li>
                    <li><a href="{{url('./contact-us')}}">Contact Us</a></li>
                    <li><a href="{{url('./about-us')}}">About Us</a></li>
                    <li><a href="{{url('./advertise')}}">Advertise</a></li>
                </ul>
            </div>
            <div class="mnmd-offcanvas__section">
                <div class="widget widget_text">
                    <div class="subscribe-form subscribe-form--horizontal text-center">
                        <p>Join our <b>{{number_format(date('now')/15, 0)}}</b> subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
                        <div class="subscribe-form__fields">
                            <input type="email" name="EMAIL" placeholder="Your email address" required="">
                            <input type="submit" value="Subscribe" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Off-canvas menu --><a href="#" class="mnmd-go-top btn btn-default hidden-xs js-go-top-el"><i class="mdicon mdicon-arrow_upward"></i></a></div>