@extends('template.master.app')

@section('template')

    @include('template.includes.header')

    <div class="main-title" style="background-color: #f2f2f2; ">
        <div class="container">
            <h1 class="main-title__primary">Contact Us</h1>
            <h3 class="main-title__secondary">WE ARE WAITING YOU TO GET IN TOUCH WITH US</h3>
        </div>
    </div>

    <div class="master-container">
        <div class="spacer-big"></div>
        <div class="hentry container" role="main">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-grid widget widget_text panel-last-child">
                        <h3 class="widget-title">Contact Us</h3>
                    </div>
                </div>
            </div>
            <div class="spacer"></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="textwidget panel widget">
                        <span class="icon-container"><span class="fa fa-home"></span></span> <b>BuildPress, llc.</b><br>
                        227 Marion Street<br>
                        Columbia, SC 29201<br><br>
                        <span class="icon-container"><span class="fa fa-phone"></span></span> <b>1-888-123-4567</b><br>
                        <span class="icon-container"><span class="fa fa-fax"></span></span> <b>1-888-123-4568</b><br>
                        <span class="icon-container"><span class="fa fa-envelope"></span></span><a href="mailto:info@example.com">info@buildpress.com</a>
                        <br><br>
                        <span class="icon-container"><span class="fa fa-home"></span></span> <b>Mon - Fir 8.00 - 18.00</b><br>
                        Saturday - Sunday CLOSED
                    </div>
                    <div class="panel widget widget_pt_social_icons panel-last-child">
                        <a class="social-icons__link" href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a class="social-icons__link" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a class="social-icons__link" href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
                        <form method="post" class="wpcf7-form" novalidate="novalidate">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
									<span class="wpcf7-form-control-wrap your-name">
										<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Your Name"/>
									</span><br/>
                                    <span class="wpcf7-form-control-wrap your-email">
										<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" placeholder="E-mail address"/>
									</span><br/>
                                    <span class="wpcf7-form-control-wrap your-subject">
										<input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" placeholder="Subject"/>
									</span>
                                </div>
                                <div class="col-xs-12 col-sm-8">
									<span class="wpcf7-form-control-wrap your-message">
										<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="Message"></textarea>
									</span><br/>
                                    <input type="submit" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit btn btn-primary"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /container -->
    </div>

    @include('template.includes.footer')

@endsection