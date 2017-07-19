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

	<title>PROPEURBS by Antean Studios | Business workshop | Jacksonville, fl </title>

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
    background-image:url(../img/propeurbs/workshop-propeurbs.jpg);
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
   <a href="index.html"> <img src="../img/propeurbs/propeurbs_logo.png" width="80%"></a>
            <h2>You, too, can spark your own results!</h2>
	</div>
    <div class="container">
       <center> <p><a href="what-you-learn">WHAT TO LEARN</a> |  <a href="what-to-bring">WHAT TO BRING</a> | <a href="schedule">SCHEDULE</a> | <a href="sponsor">SPONSORS</a> | <a href="expectations">EXPECTATIONS</a></p></center><br><br>


        <h1>APPLY TO ATTEND PROPEURBS</h1>
        <p>PROPEURBS is a two-hour business workshop. The cost to attend is $199.99. Antean Studios will pay for 4 participants. You will be informed whether you have to pay or not after submitting your application.<br><br> Because we cannot host too many participants at this time, we will have to choose eight (8) applicants to participate in the workshop. Qualifications are based on the nature and phase of your business or idea. Once you are selected, we will get in touch with you to continue the process. Before you apply, make sure you are available at the date of the workshop.</p><br>

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
      Comapany Name
      <input name="company" placeholder="What is your company name?" tabindex="2" />
    </label>
  </div>
            <div class="col-2">
    <label>
      Your role
      <input name="role" placeholder="What is your role at your company?" tabindex="3" />
    </label>
  </div>
  <div class="col-2">
    <label>
      How did you hear about us?
      <input name="hear" placeholder="How did you find out about Propeurbs?" tabindex="4" />
    </label>
  </div>
  <div class="col-3">
    <label>
      Phone
      <input name="phone" placeholder="What is the provider's phone number?" tabindex="5" required="" />
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
      What is your business status
      <select name="status" tabindex="7">
        <option value="None">Select your status</option>
        <option value="Have-Idea">I Just have an idea</option>
        <option value="Starting-Soon">I'm starting my business soon</option>
        <option value="Started-Less-Than-3mos">I started less than 3 months</option>
        <option value="Started-More-Than-3mos">I started more than 3 months</option>
        <option value="Started-More-Than-1yr">I started more than a year ago</option>
      </select>
    </label>
  </div>
           <div class="col-1">
               <label>
                   Would you like Antean Studios to cover your participating fees?
                   <select name="payment" tabindex="8">
                       <option value="None">Select</option>
                       <option value="Yes-Antean">Yes</option>
                       <option value="No">No</option>
                   </select>
               </label>
           </div>
            <div class="col-1">
            <label>
                Explain your business in a few words
                <textarea name="message" placeholder="Please describe what type of service you are providing in a few words" tabindex="9"></textarea>
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
