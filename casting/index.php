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

	<title>CASTING CALL by Antean Studios | Jacksonville, fl </title>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87457111-1', 'auto');
  ga('send', 'pageview');
</script>
</head>


<style>
    .top-page {
    background-image:url(../img/casting/feature-film-xl.jpg);
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
        font-size: 0.9em;
        color: #ea5a5a;
    }

		p {
			font-size: 0.7em;
		}

    .container-red{
        background-color: #053950;
    }

    .footer {
        padding: 30px 0%;
        background-color: #ec5a5b;
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
            <h1>CASTING CALL</h1>
	</div>
    <div class="container">
        <h1>CALLING ALL ACTORS AND ACTRESSES</h1>
        <p>ANTEAN STUDIOS is looking for ACTORS & ACTRESSES for a commercial we are doing. Please fill out the form below and we will be in contact with you if we feel that you are a great fit for this project. We are looking to work with people who are looking for exposure and experience.</p><br>

				<p><b>CURRENT PROJECT:</b><br>
					Project: HUBB INC COLLECTIONS<br>
					Production Title: Hubb Inc Tees<br>
					Project Length: 4 hours<br>
					Industry: Apparel<br>
					Broadcasting: Social media platforms such as Youtube, Facebook, Instagram, etc.<br>
					Compensation: TFP <br>
					Shooting dates: Saturday, August 26, 2017<br>
					Director: Jean Gustave<br>
					Shooting Time: 8:00AM<br>
					Casting Director: Antean Studios<br>
					Sex: Male/Female <br>
					Age: 17-30 y/o <br>
					Race: N/A [Any race]<br>
					Language: N/A<br>
					Location: Antean Studios. 4226 Atlantic Blvd. Jacksonville, fl 32207<br>
					Contract: TFP<br>

				</p><br><br>

				<br><br>
        <!-- application submit status -->
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <!-- end status -->
        <form action="" method="post">
  <div class="col-2">
      <label>
      Name
      <input name="name" placeholder="What is your name?" tabindex="1" required="" />
      </label>
  </div>
  <div class="col-2">
    <label>
      Date of Birth
      <input name="dob" placeholder="What year and month?" tabindex="2" />
    </label>
  </div>
            <div class="col-2">
    <label>
      Your Availability
      <input name="availability" placeholder="What days and time?" tabindex="3" />
    </label>
  </div>
  <div class="col-2">
    <label>
      How did you hear about us?
      <input name="hear" placeholder="How did you find out about the casting call?" tabindex="4" />
    </label>
  </div>
  <div class="col-3">
    <label>
      Phone
      <input name="phone" placeholder="What is your phone number?" tabindex="5" required="" />
    </label>
  </div>
  <div class="col-3">
      <label>
      Email
      <input name="email" placeholder="What is the provider's email?" tabindex="6" required=""/>
      </label>
  </div>
  <div class="col-3">
    <label>
      Role you are auditioning for
      <select name="role" tabindex="7">
        <option value="None">Select one</option>
        <option value="Hubbinc-Collections">HUBB INC Collections</option>
        <option value="Main-Character">Main Character</option>
        <option value="Second-Character">Second Character</option>
        <option value="Third-Character">Third Character</option>
        <option value="Extra">Extra</option>
        <option value="All-Of-The-Above">All of the above</option>
      </select>
    </label>
  </div>
            <div class="col-1">
            <label>
                Tell us about yourself in a few words
                <textarea name="message" placeholder="Sell yourself here. Please, brag." tabindex="8"></textarea>
                </label>
            </div>
						<div class="col-1">
					    <label>
					      Pictures' link
					      <input name="link" placeholder="Paste a link for your pictures here. [Dropbox, Instagram, etc.]" tabindex="9" required="" />
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
