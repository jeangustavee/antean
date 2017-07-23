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

	<title>SUMMER ENDS SOCCER TOURNAMENT by Antean Studios | Soccer Tournament | Jacksonville, fl </title>

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
    background-image:url(../img/soccer/soccer-shoot.jpg);
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
    font-size: 5.6rem;
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
}
</style>


    <body>



<div class="top-page">
   <a href="index.html"> <img src="../img/soccer/ends-summer-logo.png" width="300em"></a>
            <h2 style="color:white;">ANTEAN STUDIOS for the community</h2>
	</div>
    <div class="container">
     <center> <h2>AUGUST 19 AND 20, 2017</h2></center><br><br>
      
       <center> <p><a href="what-you-learn">REGULATION</a> |  <a href="what-to-bring">SCHEDULE</a> | <a href="schedule">PAYMENT</a> </p></center><br><br>


        <center><h1>REGISTER YOUR TEAM</h1></center>
        <p>PROPEURBS is a two-hour business workshop. The cost to attend is $199.99. Antean Studios will pay for 4 participants. You will be informed whether you have to pay or not after submitting your application.<br><br> Because we cannot host too many participants at this time, we will have to choose eight (8) applicants to participate in the workshop. Qualifications are based on the nature and phase of your business or idea. Once you are selected, we will get in touch with you to continue the process. Before you apply, make sure you are available at the date of the workshop.</p><br>

        <!-- application submit status -->
        <?php if(!empty($statusMsg)){ ?>
            <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>
        <!-- end status -->
        <form action="" method="post">
  <div class="col-1">
      <label>
      <input name="name" placeholder="Team manager full name" tabindex="1" required="" />
      </label>
  </div>
  
  <div class="col-1">
    <label>
      <input name="team" placeholder="Team name" tabindex="2" />
    </label>
  </div>
           
    <div class="col-1">
    <label>
      <input name="uniform" placeholder="Team uniform color" tabindex="3" />
    </label>
  </div>
  
  <div class="col-1">
    <label>
      <input name="captain" placeholder="Team Captain Name" tabindex="4" />
    </label>
  </div>
  
  <div class="col-1">
    <label>
      <input name="phone" placeholder="Team Phone Number" tabindex="5" required="" />
    </label>
  </div>
  <div class="col-1">
      <label>
      <input name="email" placeholder="Team email address" tabindex="6" required=""/>
      </label>
  </div>
  <div class="col-1">
    <label>
      <select name="pick" tabindex="7">
        <option value="None">How many players</option>
        <option value="Have-Idea">8 players (minimum</option>
        <option value="Starting-Soon">9 players</option>
        <option value="Started-Less-Than-3mos">10 Players (maximum)</option>
      </select>
    </label>
  </div>
            <div class="col-1">
            <label>
                <textarea name="players" placeholder="Type all players name here, first and last name." tabindex="9"></textarea>
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
