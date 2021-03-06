@extends('layouts.site')

        <!--start: Navbar -->
<nav class="navbar navbar-default" role="navigation">
    <!--start: Container -->
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><i class="fa fa-code"></i> Sma<span>rt</span>.</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-right navbar-nav">
                <li class="active dropdown">
                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.html">Home standard</a></li>
                        <li><a href="index2.html">Home alternative</a></li>
                        <li><a href="index3.html">Home alternative 2</a></li>
                        <li><a href="index4.html">Home alternative 3</a></li>
                    </ul>
                </li>
                <li ><a href="about.blade.php">About</a></li>
                <li class="dropdown">
                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="social-icons.html">Social Icons</a></li>
                        <li><a href="fontawesome.html">Font Awesome</a></li>
                        <li><a href="halflings.html">Halflings</a></li>
                        <li><a href="glyphicons.html">Glyphicons PRO</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="list-styles.html">List Styles</a></li>
                        <li><a href="charts.html">Charts</a></li>
                        <li><a href="login.blade.php">Login</a></li>
                        <li><a href="register.blade.php">Register</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">Portfolio<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="portfolio3.html">3 Columns</a></li>
                        <li><a href="portfolio4.html">4 Columns</a></li>
                    </ul>
                </li>
                <li ><a href="services.html">Services</a></li>
                <li ><a href="pricing.html">Pricing</a></li>
                <li ><a href="blog.html">Blog</a></li>
                <li ><a href="contact.blade.php">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
    <!--/.container-->
</nav>
<!--end: Navbar -->
<!-- start: Slider -->
<div class="slider-wrapper">

    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2>Twitter Bootstrap</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <a href="index.html#" class="da-link">Read more</a>
            <div class="da-img"><img src="{{ asset('assets/img/parallax-slider/twitter.png') }}" alt="image01" /></div>
        </div>
        <div class="da-slide">
            <h2>Responsive Design</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <a href="index.html#" class="da-link">Read more</a>
            <div class="da-img"><img src="{{ asset('assets/img/parallax-slider/responsive.png') }}" alt="image02" /></div>
        </div>
        <div class="da-slide">
            <h2>HTML5</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <a href="index.html#" class="da-link">Read more</a>
            <div class="da-img"><img src="{{ asset('assets/img/parallax-slider/html5.png') }}" alt="image03" /></div>
        </div>
        <div class="da-slide">
            <h2>CSS3</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            <a href="index.html#" class="da-link">Read more</a>
            <div class="da-img"><img src="{{ asset('assets/img/parallax-slider/css3.png') }}" alt="image04" /></div>
        </div>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>

</div>
<!-- end: Slider -->

<!--start: Container -->
<div class="container">

    <div class="jumbotron">
        <h3>
            Smart is incredibly responsive, with a refreshingly clean responsive design and it has some awesome features, panorama sliders, 100+ icons, 50+ social icons, fancybox, isotope, google maps, facebook open graph and many, many more!
        </h3>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
    </div><!--/.jumbotron-->

    <!-- start: Row -->
    <div class="row">

        <!-- start: Icon Box Start -->
        <div class="col-sm-6 col-md-4">

            <div class="icons-box vertical">

                <div class="row">

                    <div class="col-xs-4">
                        <i class="fa fa-check circle full-color big"></i>
                    </div>

                    <div class="col-xs-8">
                        <h3>Easy to use</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- end: Icon Box-->

        <!-- start: Icon Box Start -->
        <div class="col-sm-6 col-md-4">

            <div class="icons-box vertical">

                <div class="row">

                    <div class="col-xs-4">
                        <i class="fa fa-trophy circle full-color big"></i>
                    </div>

                    <div class="col-xs-8">
                        <h3>Best choice</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- end: Icon Box-->

        <!-- start: Icon Box Start -->
        <div class="col-sm-6 col-md-4">

            <div class="icons-box vertical">

                <div class="row">

                    <div class="col-xs-4">
                        <i class="fa fa-tablet circle full-color big"></i>
                    </div>

                    <div class="col-xs-8">
                        <h3>Fully responsive</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>

                </div>

            </div>

        </div>
        <!-- end: Icon Box-->

    </div>
    <!-- end: Row -->

    <hr>

    <!-- start: Row -->
    <div class="row">

        <div class="col-sm-9">

            <div class="title"><h3>Latest Works</h3></div>

            <!-- start: Row -->
            <div class="row">

                <div class="col-sm-4">

                    <div class="picture">
                        <a href="http://localhost:8888/bootstrap/smart2/img/car.jpg" rel="image" title="mobile app">
                            <img src="{{ asset('assets/img/car.jpg') }}" >
                            <div class="image-overlay-zoom"></div>
                        </a>
                    </div>
                    <div class="item-description">
                        <h4><a href="index.html#">Mobile App</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="picture">
                        <a href="project.html">
                            <img src="{{ asset('assets/img/web_app1.jpg') }}">
                            <div class="image-overlay-link"></div>
                        </a>
                    </div>
                    <div class="item-description">
                        <h4><a href="index.html#">Mobile App</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="picture">
                        <a href="http://localhost:8888/bootstrap/smart2/img/mobile_app1.jpg" rel="image" title="mobile app">
                            <img src="{{ asset('assets/img/mobile_app1.jpg') }}">
                            <div class="image-overlay-zoom"></div>
                        </a>
                    </div>
                    <div class="item-description">
                        <h4><a href="index.html#">Mobile App</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>

                </div>

            </div>
            <!-- end: Row -->

        </div>

        <div class="col-sm-3">

            <!-- start: Testimonials-->

            <div class="testimonial-container">

                <div class="title"><h3>What Client’s Say</h3></div>

                <div class="testimonials-carousel" data-autorotate="3000">

                    <ul class="carousel">

                        <li class="testimonial">
                            <div class="testimonials">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
                            <div class="testimonials-bg"></div>
                            <div class="testimonials-author">Lucas Luck, <span>CEO</span></div>
                        </li>

                        <li class="testimonial">
                            <div class="testimonials">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                            <div class="testimonials-bg"></div>
                            <div class="testimonials-author">Lucas Luck, <span>CTO</span></div>
                        </li>

                        <li class="testimonial">
                            <div class="testimonials">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
                            <div class="testimonials-bg"></div>
                            <div class="testimonials-author">Lucas Luck, <span>COO</span></div>
                        </li>

                        <li class="testimonial">
                            <div class="testimonials">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</div>
                            <div class="testimonials-bg"></div>
                            <div class="testimonials-author">Lucas Luck, <span>CMO</span></div>
                        </li>

                    </ul>

                </div>

            </div>

            <!-- end: Testimonials-->

        </div>

    </div>
    <!-- end: Row -->

    <hr>

    <!-- start Clients List -->
    <div class="clients-carousel">

        <ul class="slides clients">
            <li><img src="{{ asset('assets/img/logos/1.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/2.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/3.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/4.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/5.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/6.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/7.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/8.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/9.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/10.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/1.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/2.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/3.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/4.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/5.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/6.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/7.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/8.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/9.png') }}" alt=""/></li>
            <li><img src="{{ asset('assets/img/logos/10.png') }}" alt=""/></li>
        </ul>

    </div>
    <!-- end Clients List -->

    <hr>

</div>
<!--end: Container-->

<!-- start: Footer Menu -->
<div id="footer-menu" class="hidden-sm hidden-xs">

    <!-- start: Container -->
    <div class="container">

        <!-- start: Row -->
        <div class="row">

            <!-- start: Footer Menu Logo -->
            <div class="col-sm-2">
                <div id="footer-menu-logo">
                    <a class="brand" href="index.html#">Sma<span>rt</span>.</a>
                </div>
            </div>
            <!-- end: Footer Menu Logo -->

            <!-- start: Footer Menu Links-->
            <div class="col-sm-9">

                <div id="footer-menu-links">

                    <ul id="footer-nav">

                        <li><a href="index.html">Start</a></li>

                        <li><a href="about.blade.php">About</a></li>

                        <li><a href="services.html">Services</a></li>

                        <li><a href="pricing.html">Pricing</a></li>

                        <li><a href="contact.blade.php">Contact</a></li>

                    </ul>

                </div>

            </div>
            <!-- end: Footer Menu Links-->

            <!-- start: Footer Menu Back To Top -->
            <div class="col-sm-1">

                <div id="footer-menu-back-to-top">
                    <a href="index.html#"></a>
                </div>

            </div>
            <!-- end: Footer Menu Back To Top -->

        </div>
        <!-- end: Row -->

    </div>
    <!-- end: Container  -->

</div>
<!-- end: Footer Menu -->

<!-- start: Footer -->
<div id="footer">

    <!-- start: Container -->
    <div class="container">

        <!-- start: Row -->
        <div class="row">

            <!-- start: About -->
            <div class="col-sm-3">

                <h3>About Us</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                </p>

            </div>
            <!-- end: About -->

            <!-- start: Photo Stream -->
            <div class="col-sm-3">

                <h3>Photo Stream</h3>
                <div class="flickr-widget">
                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08"></script>
                    <div class="clear"></div>
                </div>

            </div>
            <!-- end: Photo Stream -->

            <div class="col-sm-6">

                <!-- start: Follow Us -->
                <h3>Follow Us!</h3>
                <ul class="social-grid">
                    <li>
                        <div class="social-item">
                            <div class="social-info-wrap">
                                <div class="social-info">
                                    <div class="social-info-front social-twitter">
                                        <a href="http://twitter.com/BootstrapMaster"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="social-info-back social-twitter-hover">
                                        <a href="http://twitter.com/BootstrapMaster"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="social-item">
                            <div class="social-info-wrap">
                                <div class="social-info">
                                    <div class="social-info-front social-facebook">
                                        <a href="http://facebook.com/BootstrapMaster"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="social-info-back social-facebook-hover">
                                        <a href="http://facebook.com/BootstrapMaster"><i class="fa fa-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="social-item">
                            <div class="social-info-wrap">
                                <div class="social-info">
                                    <div class="social-info-front social-dribbble">
                                        <a href="http://dribbble.com"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                    <div class="social-info-back social-dribbble-hover">
                                        <a href="http://dribbble.com"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="social-item">
                            <div class="social-info-wrap">
                                <div class="social-info">
                                    <div class="social-info-front social-flickr">
                                        <a href="http://flickr.com"><i class="fa fa-flickr"></i></a>
                                    </div>
                                    <div class="social-info-back social-flickr-hover">
                                        <a href="http://flickr.com"><i class="fa fa-flickr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- end: Follow Us -->

                <!-- start: Newsletter -->
                <h3>Newsletter</h3>
                <form id="newsletter">

                    <p>Please leave us your email</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <label>@:</label>
                            <div class="input-group">
                                <input type="text" class="form-control">
						      		<span class="input-group-btn">
						        		<button class="btn btn-default" type="button">Submit!</button>
						      		</span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-->
                    </div>
                </form>
                <!-- end: Newsletter -->

            </div>

        </div>
        <!-- end: Row -->

    </div>
    <!-- end: Container  -->

</div>
<!-- end: Footer -->

<!-- start: Copyright -->
<div id="copyright">

    <!-- start: Container -->
    <div class="container">

        <div class="col-sm-12">

            <p>
                &copy; 2014, <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">creativeLabs</a>. <a href="http://bootstrapmaster.com">Bootstrap Themes</a> by BootstrapMaster. Made in Poland <img src="{{ asset('assets/css/style.min.css') }}assets/img/poland2.png" alt="Poland" style="margin-top:-4px"> Prototyped with brix.io <a href="http://brix.io">Interface Builder</a>
            </p>

        </div>

    </div>
    <!-- end: Container  -->

</div>
<!-- end: Copyright -->