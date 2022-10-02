@extends('folder.master')
@section('content')

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> contact</li>
        </ul>
    </div>
</section>
<!-- contact-form 2 -->
<section class="w3l-contact-2 py-5">
    <div class="contact-infubd section-gap py-lg-5 py-md-4">
        <div class="container">
            <div class="contact-grids d-grid">
                <div class="contact-left">
                    <h4>Leave us a Message</h4>
                    <h6>For more info or inquiry about our products project, and pricing please feel free to get in
                        touch with
                        us.</h6>
                    <div class="hours">
                        <h6 class="info mt-3">Email:</h6>
                        <p> <a href="prateek@decors.in">
                        prateek@decors.in</a></p>
                        <h6 class="info mt-3">Address:</h6>
                        <p>Prateek Home decors, block 351, New Market Road Vadodara, Gujarat, India PIN: 390024</p>
                        <h6 class="info mt-3">Contact:</h6>
                        <p class="margin-top"><a href="tel:+(91) 1800 999 888">+(91) 1800 999 888</a></p>
                    </div>
                </div>
                <div class="contact-right">
                    <!-- <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form"> -->

                        <div class="input-grids">
                            <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*"
                                class="contact-input" />
                            <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                                class="contact-input" required="" />
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*"
                                class="contact-input" />
                        </div>
                        <div class="form-input">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*"
                                required=""></textarea>
                        </div>
                        <script>
                            function submitted() {
                                window.location.reload();
                                alert("Message Sent Successfully");
                            }
                        </script>
                        <button type="submit" onclick="submitted()" class="btn btn-style btn-primary submit">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
</section>
<!-- /contact-form-2 -->
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=vadodara&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe><a href="https://123movies-to.org">
        </a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
        <a href="https://www.embedgooglemap.net">google iframe</a>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
    </div>
</div>

<!-- <div class="map-iframe">
    <iframe
        src="https://maps.google.com/maps?q=vadodara&t=&z=13&ie=UTF8&iwloc=&output=embed"
        width="100%" height="400" frameborder="0" style="border: 0px; pointer-events: none;"
        allowfullscreen=""></iframe>
        
</div> -->

@stop