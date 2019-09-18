<!-- .site-content -->
        <footer class="site-footer site-footer--inverse inverse-text">
            <div class="site-footer__section site-footer__section--seperated">
                <div class="container">
                    <div class="subscribe-form subscribe-form--horizontal text-center max-width-sm">
                        <p class="typescale-1"><b>Join our <span class="color-primary">{{number_format(date('now')/15, 0)}}</span> subscribers and get access to the latest tools, freebies, product announcements and much more!</b></p>
                        <br>
                        <div>
                            {{ session('success') }}
                        </div>
                        <div class="subscribe-form__fields">
                            <p>
                                <form action="{{route('new_subscriber')}}" method="POST">
                                    @csrf
                                    <input type="email" name="email" placeholder="Your email address" required="">
                                    <input type="submit" value="Subscribe" class="btn btn-primary">
                                </form>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__section site-footer__section--seperated site-footer__section--bordered">
                <div class="container">
                    <nav class="footer-menu">
                        <ul id="menu-footer-menu" class="navigation navigation--footer navigation--center">
                        	<li><a href="{{url('./about-us')}}">About Us</a></li>
                            <li><a href="{{url('./contact-us')}}">Contact Us</a></li>
                            <li><a href="{{url('advertise')}}">Advertise</a></li>
                            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- <div class="site-footer__section">
                <div class="container">
                    <div class="site-footer__section-inner">
                        <ul class="social-list social-list--xl list-center">
                            <li><a href="#"><i class="mdicon mdicon-facebook"></i></a></li>
                            <li><a href="#"><i class="mdicon mdicon-twitter"></i></a></li>
                            <li><a href="#"><i class="mdicon mdicon-youtube"></i></a></li>
                            <li><a href="#"><i class="mdicon mdicon-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <div class="site-footer__section">
                <div class="container">
                    <div class="text-center">9Scroob &copy; {{ date('Y') }}. | All rights reserved</div>
                </div>
            </div>
        </footer>