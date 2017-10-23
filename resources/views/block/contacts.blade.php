
<!-- start: Map -->
<div>

    <!-- starts: Google Maps -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.652480356975!2d30.520697833950585!3d50.447573442672166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce56b2456d3b%3A0xd062ae171b57e947!2z0LLRg9C70LjRhtGPINCl0YDQtdGJ0LDRgtC40LosINCa0LjRl9CyLCDQo9C60YDQsNGX0L3QsA!5e0!3m2!1suk!2sus!4v1501112558090" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!-- end: Google Maps -->
</div>
<!-- end: Map -->


<!-- start: Wrapper -->
<div id="wrapper">

    <!-- start: Container -->
    <div class="container">

        <!-- start: Row -->
        <div class="row">

            <!-- start: Contact Info -->
            <div class="col-sm-3">
                <div class="title"><h3>Contact Info</h3></div>
                <p>
                    <b>Company Name</b>
                </p>
                <p>
                    30 South Park Avenue
                </p>
                <p>
                    San Francisco, CA 94108, USA
                </p>
                <p>
                    Phone: (123) 456-7890
                </p>
                <p>
                    Fax: +08 (123) 456-7890
                </p>
                <p>
                    Email: contact@companyname.com
                </p>
                <p>
                    Web: companyname.com
                </p>
            </div>
            <!-- end: Contact Info -->

            <!-- start: Contact Form -->
            <div class="col-sm-6">
                <div class="title"><h3>Contact Form</h3></div>

                <!-- start: Contact Form -->
                <!-- Form -->
                <div id="form-comment">
                    <form method="post">
                        {{csrf_field()}}
                        @if ( !Auth::user())
                            <div class="field">
                                <label>Name:</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                        @endif

                        <div class="field">
                            <label>Тема: <span>*</span></label>
                            <input type="text" name="subject" class="form-control" />
                        </div>

                        <div class="field">
                            <label>Message: <span>*</span></label>
                            <textarea name="text" class="form-control" ></textarea>
                        </div>

                        <div class="field">
                            <input type="submit" value="Add Comment"/>
                        </div>

                    </form>

                </div>

            </div>
            <!-- end: Contact Form -->

            <!-- start: Social Sites -->
            <div class="col-sm-3">
                <div class="title"><h3>Follow US!</h3></div>
                <ul class="social-bookmarks">
                    <li class="facebook"><a href="https://www.facebook.com/brankic1979themes">facebook</a></li>
                    <li class="github"><a href="contact.blade.php#">github</a></li>
                    <li class="google"><a href="contact.blade.php#">google</a></li>
                    <li class="linkedin"><a href="contact.blade.php#">linkedin</a></li>
                    <li class="myspace"><a href="contact.blade.php#">myspace</a></li>
                    <li class="rss"><a href="contact.blade.php#">rss</a></li>
                    <li class="skype"><a href="contact.blade.php#">skype</a></li>
                    <li class="twitter"><a href="contact.blade.php#">twitter</a></li>
                    <li class="yahoo"><a href="contact.blade.php#">yahoo</a></li>
                    <li class="youtube"><a href="contact.blade.php#">youtube</a></li>
                </ul>
            </div>
            <!-- end: Social Sites -->

        </div>
        <!-- end: Row -->

    </div>
    <!-- end: Container -->

</div>
<!-- end: Wrapper  -->