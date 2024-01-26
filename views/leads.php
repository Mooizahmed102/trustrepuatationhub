<?php include_once("includes/head.php") ?>
<body>
<?php include_once("includes/header.php") ?>
<section class="inner-banner">
<img alt="Image" class="img-responsive" src="img/insight-banner.jpg">
<div class="banner-text">
<div class="container">
<div class="row ">
<div class="col-md-10 col-sm-10 col-xs-12 center-col">
<h3>Select Plan</h3>
</div>
</div>
</div>
</div>
</section>
<section class="content-pg all-section" id="sec-2">
<div class="container">
<div class="row ">
<div class="col-md-10 col-sm-10 col-xs-12 center-col">
<div class="plan-form-head text-center">
<div class="logo wow zoomIn" data-wow-delay="0.2s" data-wow-duration="2s">
</div>
<h3 class="section-head">Your Information</h3>
<p>If you are interested in speaking with Trust Reputation Hub about an upcoming project, there are a number of ways we can make that happen. Filling out the form would help us get the right person in touch with you, or you could give us a call.</p>
</div>
<form method="POST" data-noinfo="true" class="contact-form plan-form" action="/mail" cr-attached="true">
<input type="hidden" value="3" name="contactform">
<input name="website_design" placeholder="" type="hidden" value="Website Design">
<div class="col-md-4 ">
<div class="form-group">
<input class="form-control" name="cn" placeholder="Full Name" required="" type="text">
</div>
</div>
<div class="col-md-4 ">
<div class="form-group">
<input class="form-control" name="em" placeholder="Email" required="" type="email">
</div>
</div>
<div class="col-md-4 ">
<div class="form-group">
<input class="form-control" name="pn" placeholder="Phone Number" required="" type="text">
</div>
</div>
<div class="col-md-12 ">
<div class="form-group">
<p>Please tell us briefly about your business or the services you provide</p>
<textarea class="form-control" name="business_description" placeholder="Business Description*" rows="8"></textarea>
</div>
</div>
<div class="col-md-12 ">
<div class="form-group">
<p>What kind of a design do you want to portray i.e. fun, corporate, funky etc</p>
<textarea class="form-control" name="design_peception" placeholder="Design Preference" rows="8"></textarea>
</div>
</div>
<div class="col-md-12 ">
<div class="form-group">
<p>Anything additional that you want the design team to know</p>
<textarea class="form-control" name="additional_comments" placeholder="Additional Comments" rows="8"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<button class="blue-btn  hvr-bounce-to-right" type="submit">Submit Request</button>
<div class="control-group clearfix  ">
<input type="hidden" id="lead_area" name="lead_area" value="for $399">
<input type="hidden" id="lead_area" name="package_starter" value="Recommended Professional">
<input type="hidden" id="lead_area" name="package_name" value="Website Design">
<input type="hidden" id="lead_org_price" name="lead_org_price" value="">
<input type="hidden" name="send" value="1">

<input type="hidden" name="lb_source" value="">
<input type="hidden" name="lb_source_cat" value="">
<input type="hidden" name="lb_source_nam" value="">
<input type="hidden" name="lb_source_ema" value="">
<input type="hidden" name="lb_source_con" value="">
<input type="hidden" name="lb_source_pho" value="">
<input type="hidden" name="lb_source_off" value="">

<input type="hidden" name="fullpageurl" value="">
<input type="hidden" name="pageurl" value="www.trustreputationhub.com/plan-form">

<input type="hidden" name="ip2loc_ip" value="103.156.137.178">
<input type="hidden" name="ip2loc_isp" value="MyNet Broadband (Pvt.) Ltd">
<input type="hidden" name="ip2loc_org" value="MyNet Broadband (Pvt.) Ltd">
<input type="hidden" name="ip2loc_country" value="Pakistan">
<input type="hidden" name="ip2loc_region" value="Sindh">
<input type="hidden" name="ip2loc_city" value="Karachi">
<input type="hidden" name="service_id" value="5669" class="service_id">
<input type="hidden" name="service_price" value="for $399" class="service_price">
</div>
</div>
</div>
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.trustreputationhub.com/"><input type="hidden" name="first_visit_date_time" value="Sun Jan 14 2024 03:29:06 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
</div>
</section>
<script type="text/javascript">
function planformsubmit(res){
if(res){
res = JSON.parse(res);
if(res.status){
generateNotification(res.status,res.data);
setTimeout(function(){
window.location.href='https://www.designquotations.com/terminal/paynow/index.php?id=4a8b3f88-5147-11eb-bfc6-52540009454a';
},2000);
}
}
}
</script>
<section class="contact-section">
<div class="container">
<div class="row text-center">
<div class="col-md-8 col-sm-8 col-xs-12 center-col">
<h3 class="section-head wow bounceIn" data-wow-delay="0.6s" data-wow-duration="2s">Let's discuss your next project
<a href="contact">CONNECT NOW</a></h3>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 nopadding blue-bg">
<div class="expert-part wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
<h4>We’ve driven over 6,271,747 leads for our clients. Discover how we can help your business grow.</h4>
<form method="POST" data-noinfo="true" class=" exp-form" action="/mail" cr-attached="true">
<input type="hidden" value="1" name="contactform">
<div class="col-md-6 ">
<div class="form-group">
<input class="form-control" name="cn" placeholder="Full Name" required="" type="text">
</div>
</div>
<div class="col-md-6 ">
<div class="form-group">
<input class="form-control" name="company_name" placeholder="Company Name" required="" type="text">
</div>
</div>
<div class="col-md-6 ">
<div class="form-group">
<input class="form-control" name="em" placeholder="Email Address" required="" type="email">
</div>
</div>
<div class="col-md-6 ">
<div class="form-group">
<input class="form-control" name="pn" placeholder="Phone Number" required="" type="phone">
</div>
</div>
<div class="col-md-12 ">
<p class="select-note">Please Select Your Service</p>
<div class="form-group">
<select id="sort" name="select_services" required="">
<option value=""> Select Services </option>
<option value="Logo Design"> Logo Design </option>
<option value="Branding"> Branding</option>
<option value="Ecommerce Websites">Ecommerce Websites</option>
<option value="Domian &amp; Hosting">Domian &amp; Hosting</option>
<option value="Marketing">Marketing</option>
<option value="Website Maintenance">Website Maintenance</option>
</select>
</div>
</div>
<div class="col-md-12 ">
<p class="select-note">What is your projected monthly budget for this project?</p>
<div class="form-group">
<input class="form-control" name="price_range" placeholder="$" required="" type="number">
</div>
</div>
<div class="col-md-12 ">
<div class="form-group">
<textarea class="form-control" name="msg" placeholder="Your Idea" rows="8" required=""></textarea>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<button type="submit" class="blue-btn  hvr-bounce-to-right">Hear From an Expert</button>
</div>
</div>
</div>
<input type="hidden" id="lead_area" name="lead_area" value="for $179">
<input type="hidden" id="lead_org_price" name="lead_org_price" value="">
<input type="hidden" name="send" value="1">

<input type="hidden" name="lb_source" value="">
<input type="hidden" name="lb_source_cat" value="">
<input type="hidden" name="lb_source_nam" value="">
<input type="hidden" name="lb_source_ema" value="">
<input type="hidden" name="lb_source_con" value="">
<input type="hidden" name="lb_source_pho" value="">
<input type="hidden" name="lb_source_off" value="">

<input type="hidden" name="fullpageurl" value="">
<input type="hidden" name="pageurl" value="www.trustreputationhub.com/plan-form">

<input type="hidden" name="ip2loc_ip" value="103.156.137.178">
<input type="hidden" name="ip2loc_isp" value="MyNet Broadband (Pvt.) Ltd">
<input type="hidden" name="ip2loc_org" value="MyNet Broadband (Pvt.) Ltd">
<input type="hidden" name="ip2loc_country" value="Pakistan">
<input type="hidden" name="ip2loc_region" value="Sindh">
<input type="hidden" name="ip2loc_city" value="Karachi">
<input type="hidden" name="service_id" value="5731" class="service_id">
<input type="hidden" name="lead_type" value="Organic Lead"><input type="hidden" name="first_visit_link" value="https://www.trustreputationhub.com/"><input type="hidden" name="first_visit_date_time" value="Sun Jan 14 2024 03:29:06 GMT+0500 (Pakistan Standard Time)"></form>
</div>
</div>
<div class="col-md-5 col-sm-5 col-xs-12">
<div class="contact-right wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="2s">
<div class="contact-icon-new">
<img loading="lazy" src="img/phone-ringing.png" class="img-responsive" alt="img">
</div>
<a class="contact-phone" href="tel:866-516-7575">866-516-7575</a>
<h3>Ready to speak with our marketing expert? <br> Give us a ring!</h3>
<div class="call-to-action-margin">
<div class="flexRow det-box">
<img loading="lazy" alt="Image" class="img-responsive" data-url="img/contact-icon1.png" src="img/contact-icon1.png">
<h3>1.6M <span>Hours of Expertise</span></h3>
</div>
<div class="flexRow det-box">
<img loading="lazy" alt="Image" class="img-responsive" data-url="img/contact-icon2.png" src="img/contact-icon2.png">
<h3>200+ <span>Digital Marketing Masters On-Staff</span></h3>
</div>
<div class="flexRow det-box">
<img loading="lazy" alt="Image" class="img-responsive" data-url="img/contact-icon3.png" src="img/contact-icon3.png">
<h3>1,128<span> Websites Launched</span></h3>
</div>
</div>
<ul class="social social-new-1 wow zoomIn" data-wow-delay="2s" data-wow-duration="2s">
<li><a href="https://www.facebook.com/trustreputationhub/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

<li><a href="https://www.linkedin.com/company/trustreputationhub/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

<li><a href="https://www.youtube.com/channel/UCyCKKAHOzVyrG4dYtEFJJqw" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>

<li><a href="https://www.bark.com/en/us/company/american-web-coders/n1RO3/" target="_blank"><img src="img/bark-icon.png"></a> </li>

<li><a href="https://www.sitejabber.com/reviews/trustreputationhub.com" target="_blank" class="dmca-badge"> <img src="img/sitejabber-icon.png"></a> </li>
</ul>
</div>
</div>
</div>
</div>
</section>
<?php include_once("includes/footer.php") ?>