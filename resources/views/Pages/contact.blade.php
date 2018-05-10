@extends('layouts.app')
@section('title', 'Contact')
@section('content') 


 </header>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
	<section class = "header-contact">
		<div class="container">
                    <div class="header-contact">
                    <h1>Contact Us</h1>    
                        <p><a href="contact1.html#">Home</a> - Contact</p>
                </div>
            </div>
        </div>
        <br><br>
        <!-- Inner Page Banner Area End Here -->
        <!-- Contact Us Page 1 Area Start Here -->
        <div class="contact-us-page1-area">
            <div class="container">
                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                        <div class="contact-us-info1">
                            <ul> 
                                <li>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                                    Golden Bunch Schools, Yaba 2, Moleye Street, Alagomeji, Yaba, Lagos.</p>
                                </li>
                            <li>
                                 <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;
                                    OKOTA 50, Ajoke Okusanya Street, <br>Ago-palace way, Okota, Lagos
                                <p>
                            </li>
                             <li>
                                <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
                                    +(234) 8126601920, +(234) 8028485498</p>
                                </li>
                                <li>
                                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    goldenbunchschools@gmail.com</p>
                                </li>
                                <li>
                                    <li><p>Follow us on:</p></li>&nbsp;&nbsp;
                                    <ul class="contact-social">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title-default-left title-bar-high">Contact With Us</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="contact-form1">
                                <form id="contact-form">
                                    <fieldset>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                            <div class="form-group margin-bottom-none">
                                                <button type="submit" class="btn btn-default">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                            <div class='form-response'></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section> 
        <!-- Contact Us Page 1 Area End Here -->

@endsection