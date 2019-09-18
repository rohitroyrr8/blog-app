<!-- Site header -->
	<header class="site-header site-header--skin-2">
	    <!-- Mobile header -->
	    <div id="mnmd-mobile-header" class="mobile-header mobile-header--inverse visible-xs visible-sm">
	        <div class="mobile-header__inner mobile-header__inner--flex">
	            <div class="header-branding header-branding--mobile mobile-header__section text-left">
	                <div class="header-logo header-logo--mobile flexbox__item text-left">
	                    <a href="{{url('./')}}"><img src="{{ asset('img/9scroob_light.png?ver=2.0') }}" alt="logo"></a>
	                </div>
	            </div>
	            <div class="mobile-header__section text-right">
	                <button type="submit" class="mobile-header-btn js-search-dropdown-toggle"><span class="hidden-xs">Search</span><i class="mdicon mdicon-search mdicon--last hidden-xs"></i><i class="mdicon mdicon-search visible-xs-inline-block"></i></button> <a href="#mnmd-offcanvas-primary" class="offcanvas-menu-toggle mobile-header-btn js-mnmd-offcanvas-toggle"><span class="hidden-xs">Menu</span><i class="mdicon mdicon-menu mdicon--last hidden-xs"></i><i class="mdicon mdicon-menu visible-xs-inline-block"></i></a></div>
	        </div>
	    </div>
	    <!-- Mobile header -->
	    <!-- Navigation bar -->
	    <nav class="navigation-bar navigation-bar--fullwidth navigation-bar--inverse hidden-xs hidden-sm js-sticky-header-holder">
	        <div class="navigation-bar__inner">
	            <div class="navigation-bar__section"><a href="#mnmd-offcanvas-primary" class="offcanvas-menu-toggle navigation-bar-btn js-mnmd-offcanvas-toggle"><i class="mdicon mdicon-menu icon--2x"></i></a>
	                <div class="site-logo header-logo">
	                    <a href="{{url('./')}}"><img src="{{asset('img/9scroob_light.png?ver=2.0')}}" alt="logo"></a>
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
	        
	        <!-- .header-search-dropdown -->
	    </nav>
	    <!-- Navigation-bar -->
	</header>
	<!-- Site header -->