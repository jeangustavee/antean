<?php include_once("send.php") ?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700|Merriweather:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->
	<script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="icon" type="image/png" sizes="32x32" href="../img/antean_favicon.png">

	<title>After Work Networking Mixer | Jacksonville, fl </title>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87457111-1', 'auto');
  ga('send', 'pageview');
</script>

    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '642993835891586', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=642993835891586&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<script>
fbq('track', 'CompleteRegistration', {
value: 25.00,
currency: 'USD'
});
</script>
</head>


<style>
    .top-page {
    background-image:url(../img/mixer/mixer-img.jpg);
    background-repeat:no-repeat;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
    background-position:center;
    height: 100%;
    padding: 190px 10%;
}
    a {
        color: #053950;
    }
    
    h1{
        text-transform: uppercase;
    }

    a:hover {
        color: #ea5a5a;
    }

		.top-page h1 {
			font-size: 2.5em;
			color: black;
		}

    h3 {
        margin-bottom: 90px;
        color: gray;
        align-content: center;
        font-size: 1.5em;
    }

    h2{
        font-size: 1.9em;
        color: white;
        text-transform: uppercase;
    }

		p {
			font-size: 0.7em;
		}

    .container-red{
        background-color: #053950;
    }

    .footer {
        padding: 30px 0%;
        background-color: #ed1c24;
    }

@media only screen and (min-width: 768px) {
  .top-page {
    padding: 190px 10%;
  }
  .top-page h1{
    font-size: 6em;
		font-weight: 900;
		text-shadow: 2px;
		color: #ea5a5a;
  }
    h3{
        font-size: 3.5em;
    }

    h2{
        font-size: 2.5em;
        text-transform: uppercase;
    }

    b {
        font-weight: 600;
        text-transform: uppercase;
    }

		p {
			font-size: 1em;
		}
}
</style>


    <body>



<div class="top-page">
            <img src="../img/mixer/after-work-mixer-web.png" width="280px">
            <h2><b>For creative entrepreneurs<br>and small business owners</b></h2>
	</div>
    <div class="container">
        <h1>JULY 20th, 2017 | 6:30PM-9:30PM</h1>
        <p>The After Work Networking Mixer is a FREE networking mixer committed to connect like-minded individuals in the Jacksonville business scene on a monthly basis. Our primary focus is to create an atmosphere where business owners and creative entrepreneurs may network and socialize freely. The After Work Networking Mixer will give opportunities to business owners and creative entrepreneurs to showcase their product or services. It’s our hope that as we do more events, we might grow to encompass more of what we feel is lacking in the Jacksonville business and entrepreneurial scenes</p>
        <br>
        <p>We will have a list with all business owners attending the event to give out to every single guest and to email out to our subscribers as references. They might use the list when they need any type of service. People do business with people they know. It’s a good way to showcase all businesses in one place instead of exchanging tones of business cards. It’s also a good way to build a stronger business community. If you would like to reserve a spot for this event, please register your business below.</p>

				<br><br>
        <!-- application submit status -->
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <!-- end status -->
        <form action="" method="post">
  <div class="col-3">
      <label>
      Name
      <input name="name" placeholder="What is your name?" tabindex="1" required="" />
      </label>
  </div>
  <div class="col-3">
    <label>
      Email
      <input name="email" placeholder="Your email here" tabindex="2" />
    </label>
  </div>
    <div class="col-3">
    <label>
      Phone Number
      <input name="phone" placeholder="Your phone #" tabindex="3" />
    </label>
  </div>
  <div class="col-2">
    <label>
      Business Name
      <input name="business" placeholder="Your business name?" tabindex="4" />
    </label>
  </div>
  <div class="col-2">
    <label>
      Business Website
      <input name="website" placeholder="Your business website link" tabindex="5" />
    </label>
  </div>
  <div class="col-3">
      <label>
      Business Instagram
      <input name="instagram" placeholder="Business instagram link" tabindex="6" />
      </label>
  </div>
    <div class="col-3">
      <label>
      What's your position
      <input name="position" placeholder="Your position at your business" tabindex="7" />
      </label>
  </div>
  <div class="col-3">
    <label>
      Would you like to become a sponsor?
      <select name="sponsor" tabindex="8">
        <option value="None">Select one</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
        <option value="Maybe">Maybe Next Time</option>
      </select>
    </label>
  </div>
            <div class="col-1">
            <label>
                Describe your company
                <textarea name="description" placeholder="Description here" tabindex="9"></textarea>
                </label>
            </div>
    <div class="col-1">
				<label>
				How are you doing with your business?
				<input name="status" placeholder="Tell us if you are doing okay, being successful, struggling, etc." tabindex="10"  />
				</label>
				</div>
  <div class="col-submit">
    <input type="submit" name="submit" value="Submit">
  </div>
</form>
  <br><br>
   <p><b>MANIFESTO</b> </p>
   <p>It’s our desire to cultivate a place where people with similar interests can meet and mingle. We’re all about inclusion at the After Work Networking Mixer; no people, group or organization will be excluded. If you vibe with our concept, come to our next event and introduce yourself.
</p>
    </div>

    <div class="footer">
    <p><center>&#8652; <br>
        © ANTEAN STUDIOS - All copyright 2016
        <br>
        <a href="http://facebook.com/anteanstudios" target="_blank">Facebook</a> | <a href="http://instagram.com/anteanstudios" target="_blank">Instagram</a> | <a href="http://twitter.com/anteanstudios" target="_blank">Twitter</a> | <a href="https://anteanstudios.tumblr.com" target="_blank">Tumblr</a> <br>
        </center></p>

    </div>

<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
