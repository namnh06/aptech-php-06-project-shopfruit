@extends('front.template.template-front')
@section('content')
<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title">CONTACTS</span>
                </h2>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.7640950474224!2d108.24714761485801!3d16.025791288907744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142175023acc5bf%3A0x1f6e10701e5bcca0!2zOTkgTMOqIFbEg24gSGnhur9uLCBLaHXDqiBN4bu5LCBOZ8WpIEjDoG5oIFPGoW4sIMSQw6AgTuG6tW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1469949400561" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-9 col-sm-9">
                    <h2>Contact Form</h2>
                    <p>Please fill out this form below:</p>

                    <!-- BEGIN FORM-->
                    <form action="#" role="form">
                        <div class="form-group">
                            <label for="contacts-name">Name</label>
                            <input type="text" class="input form-control" id="contacts-name">
                        </div>
                        <div class="form-group">
                            <label for="contacts-email">Email</label>
                            <input type="email" class="input form-control" id="contacts-email">
                        </div>
                        <div class="form-group">
                            <label for="contacts-message">Message</label>
                            <textarea class="input form-control" rows="5" id="contacts-message"></textarea>
                        </div>
                        <button class="button" type="submit" >Send Message  <i class=" fa fa-send"></i></button>
                        <button type="button" id="btn-remove-all-item" class="button-cancel margin-right-20">Cancel</button>
                    </form>
                    <!-- END FORM-->
                </div>

                <div class="col-md-3 col-sm-3 sidebar2">
                    <h2>Our Contact</h2>
                    <address>
                        <strong>Eco Shop</strong><br>
                        999 Le Van Hien Street, Ngu Hanh Son District, Danang City, Vietnam<br>
                        <abbr title="Phone">Phone:</abbr>(+84) 511.3446.295
                    </address>
                    <address>
                        <strong>Email</strong><br>
                        <a href="mailto:info@email.com">ecoshop@email.com</a><br>
                    </address>
                    <ul class="social-icons margin-bottom-40">
                        <li><a href="#" data-original-title="facebook" class="facebook"></a></li>
                        <li><a href="#" data-original-title="github" class="github"></a></li>
                        <li><a href="#" data-original-title="Goole Plus" class="googleplus"></a></li>
                        <li><a href="#" data-original-title="linkedin" class="linkedin"></a></li>
                        <li><a href="#" data-original-title="rss" class="rss"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
    @endsection