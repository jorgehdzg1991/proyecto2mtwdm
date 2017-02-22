<div id="top-bar">

    <div class="container clearfix">

        <div class="col_half hidden-xs nobottommargin">

            <!-- Top Links
            ============================================= -->
            <div class="top-links">
                <ul>
                    <li><a href="#"><i class="icon-time"></i> Timings</a></li>
                    <li><a href="#"><i class="icon-phone3"></i> +91-800-9876-221</a></li>
                    <li><a href="#" class="nott"><i class="icon-envelope2"></i> medical@canvas.com</a></li>
                </ul>
            </div><!-- .top-links end -->

        </div>

        <div class="col_half col_last fright nobottommargin">

            <!-- Top Links
            ============================================= -->
            <div class="top-links">
                <ul>
                    <li><a href="#">EN</a>
                        <ul>
                            <li><a href="#">{{ image('images/icons/flags/french.png', 'alt': 'Francés') }} FR</a></li>
                            <li><a href="#">{{ image('images/icons/flags/italian.png', 'alt': 'Italiano') }} IT</a></li>
                            <li><a href="#">{{ image('images/icons/flags/german.png', 'alt': 'Alemán') }} DE</a></li>
                        </ul>
                    </li>
                    <li><a href="#" data-scrollto="#booking-appointment-form" data-offset="100" data-easing="easeInOutExpo" data-speed="1200" class="bgcolor" style="color:#fff;">Book an Appointment</a></li>
                </ul>
            </div><!-- .top-links end -->

        </div>

    </div>

</div><!-- #top-bar end -->

<!-- Header
============================================= -->
<header id="header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                {{ link_to('index', image('images/logo-medical.png', 'alt': 'Canvas Logo'), 'class': 'standard-logo') }}
                {{ link_to('index', image('images/logo-medical@2x.png', 'alt': 'Canvas Logo'), 'class': 'retina-logo') }}
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="style-3">

                <ul>
                    <li class="current"><a href="#"><div>Home</div></a></li>
                    <li><a href="#"><div>About Us</div></a></li>
                    <li><a href="#"><div>Departments</div></a></li>
                    <li><a href="#"><div>Services</div></a></li>
                    <li><a href="#"><div>Doctors</div></a></li>
                    <li><a href="#"><div>Blog</div></a></li>
                    <li><a href="#"><div>Contact</div></a></li>
                </ul>

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->

<section id="content">
    <div class="content-wrap">
        <div class="container-fluid">
            {{ flash.output() }}
        </div>

        <!-- Aquí se despliega el contenido de los módulos -->
        {{ content() }}
    </div>
</section>

<!-- Footer
============================================= -->
<footer id="footer" style="background-color: #F5F5F5;border-top: 2px solid rgba(0,0,0,0.06);">

    <div class="container" style="border-bottom: 1px solid rgba(0,0,0,0.06);">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_two_third">

                <div class="widget clearfix">

                    <div class="widget-subscribe-form-result"></div>
                    {{ form('include/subscribe.php', 'id': 'widget-subscribe-form', 'role': 'form', 'method': 'post', 'class': 'nobottommargin row clearfix') }}
                        <div class="col-md-9">
                            <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="sm-form-control required email" placeholder="Enter your Email to Subscribe to our Newsletter">
                        </div>
                        <div class="col-md-3">
                            <button class="button button-rounded nomargin center btn-block" type="submit">Subscribe</button>
                        </div>
                    {{ end_form() }}

                    <div class="line line-sm"></div>

                    <div class="row">
                        <div class="clear-bottommargin-sm clearfix">

                            <div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Forums</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Agency</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Personal</a></li>
                                    <li><a href="#">One Page</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Wedding</a></li>
                                    <li><a href="#">App Showcase</a></li>
                                    <li><a href="#">Magazine</a></li>
                                    <li><a href="#">Landing Page</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">

                <div class="widget clear-bottommargin-sm clearfix">

                    <div class="row">

                        <div class="col-md-12 bottommargin-sm">
                            <div class="footer-big-contacts">
                                <span>Call Us:</span>
                                (91) 22 55412474
                            </div>
                        </div>

                        <div class="col-md-12 bottommargin-sm">
                            <div class="footer-big-contacts">
                                <span>Send an Email:</span>
                                info@canvas.com
                            </div>
                        </div>

                    </div>

                </div>

                <div class="widget subscribe-widget clearfix">
                    <div class="row">

                        <div class="col-md-6 clearfix bottommargin-sm">
                            <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                        </div>
                        <div class="col-md-6 clearfix">
                            <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                <i class="icon-rss"></i>
                                <i class="icon-rss"></i>
                            </a>
                            <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                        </div>

                    </div>
                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="nobg">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
            </div>

            <div class="col_half col_last tright">
                <div class="copyrights-menu copyright-links clearfix">
                    <a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->