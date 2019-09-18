<!DOCTYPE html>
<html lang="en-US">
<head>
    
    @include('includes.header')
    @yield('header')

</head>
<body class="home home-5 has-block-heading-line-under">
	<!-- .site-wrapper -->
    <div class="site-wrapper">
    	@include('includes.navbar')

    	@yield('content')

    	@include('includes.footer')
    	@include('includes.mobile-navbar')

    </div>
    @include('includes.script')
</body>
</html>