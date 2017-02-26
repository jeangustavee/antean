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

	<title>HIRE LOCAL - CALL FOR STORIES | Jacksonville, fl </title>

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
    background-color: #91B6CB;
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
        color: #4E6D7F;
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
    dropcap {
    float: left;
    width: 0.1em;
    font-size: 700%;
    line-height: 70%;
    color: #AF464B;
}

@media only screen and (min-width: 768px) {
  .top-page {
    padding: 150px 0%;
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
            <img src="../img/hirelocal/Hire_Local_logo%201.png" width="300px">
            <h2><b>call for subjects<br>join the movement...</b></h2>
	</div>
    <div class="container">
        <h1>Make bigger impacts together</h1>
        <p><dropcap>"</dropcap>For this project I will focus on subjects that can trigger motivations from others and incite them to start hiring local talents. I want to hear from freelancers and small business owners. Participants are not limited to women, people of color, working parents, immigrants, LGBT, disabled, etc.</p>
        <br>
        <p>I want to hear from folks with stories to tell and that are able to make impacts on others’ lives. I want to know what pushed you to launch your business. I want to know how you made it in Jacksonville. I want to know about your triumphs and struggles. I want to hear from your point of view of joining the movements of #hirelocalinjax."</p>
        <br>
        <p><a href="http://jeanegustave.com" target="_blank">— Jean</a> </p><br><br>
<hr>
				<br><br>
       <h2>Think it's a good movement?<br>Submit your story</h2><br><br>
        <!-- application submit status -->
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <!-- end status -->
        <form action="" method="post">
  <div class="col-1">
      <label>
      NAME
      <input name="name" placeholder="What is your name?" tabindex="1" required="" />
      </label>
  </div>
  <div class="col-1">
    <label>
      EMAIL
      <input name="email" placeholder="Your email here" tabindex="2" />
    </label>
  </div>
    <div class="col-1">
    <label>
      PHONE NUMBER
      <input name="phone" placeholder="Your phone #" tabindex="3" />
    </label>
  </div>
  <div class="col-1">
    <label>
      TITLE AND COMPANY
      <input name="title" placeholder="Your company name and your position?" tabindex="4" />
    </label>
  </div>
  <div class="col-1">
    <label>
      WEBSITE/SOCIAL
      <input name="website" placeholder="Your website and social media link" tabindex="5" />
    </label>
  </div>
  <div class="col-1">
      <label>
      YEARS IN BUSINESS
      <input name="years" placeholder="How long have you been in your field?" tabindex="6" />
      </label>
  </div>
  <div class="col-1">
    <label>
      HAVE YOU EVER HIRED LOCAL TALENTS BEFORE?
      <select name="hire" tabindex="7">
        <option value="None">Select one</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </label>
  </div>
           <div class="col-1">
    <label>
      ARE YOU A SUPPORTER OF LOCAL BUSINESSES?
      <select name="support" tabindex="8">
        <option value="None">Select one</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      </select>
    </label>
  </div>
            <div class="col-1">
            <label>
                SHORT BIO
                <textarea name="bio" placeholder="Short bio here" tabindex="9"></textarea>
                </label>
            </div>
            <div class="col-1">
            <label>
                PROUDEST CAREER ACCOMPLISHMENTS
                <textarea name="accomplishments" placeholder="Type here" tabindex="10"></textarea>
                </label>
            </div>
            <div class="col-1">
            <label>
                BIGGEST CAREER STRUGGLES
                <textarea name="struggles" placeholder="Type here" tabindex="11"></textarea>
                </label>
            </div>
            <div class="col-1">
            <label>
                DO YOU HAVE ANY STRATEGY TO START/CONTINUE HIRING LOCAL?
                <textarea name="strategy" placeholder="Type here" tabindex="12"></textarea>
                </label>
            </div>
            <div class="col-1">
            <label>
               ANTHING ELSE YOU'D LIKE TO SHARE?
                <textarea name="share" placeholder="Type here" tabindex="13"></textarea>
                </label>
            </div>
    <div class="col-1">
				<label>
				HOW DID YOU HEAR ABOUT THIS PROJECT?
				<input name="hear" placeholder="Tell us where did you hear about the project" tabindex="14"  />
				</label>
				</div>
  <div class="col-submit">
    <input type="submit" name="submit" value="Submit">
  </div>
</form>
    </div>

    <div class="footer">
    <h1><center>&#8652; <br>
        © ANTEAN STUDIOS - All copyright 2016</center></h1>

    </div>

<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
