<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $role = $_POST['role'];
    $hear = $_POST['hear'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter a valid email address.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'kenfxstudios@gmail.com';
            $emailSubject = 'Contact Request Submitted by '.$name;
            $htmlContent = '<h2>Contact Request Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Company</h4><p>'.$company.'</p> 
                <h4>Role</h4><p>'.$role.'</p> 
                <h4>How you heard about us?</h4><p>'.$hear.'</p> 
                <h4>Phone</h4><p>'.$phone.'</p> 
                <h4>Message</h4><p>'.$message.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your application for Propeurbs has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your contact request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
?>
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
        <p>PROPEURBS is a one-day free business workshop. You can attend at no cost. Because we cannot host too many participants at this time, we will have to choose eight (8) applicants to participate in the workshop. Qualifications are based on the nature and phase of your business or idea. Once you are selected, we will get in touch with you to continue the process. Before you apply, make sure you are available at the date of the workshop.</p><br>

        <form method="post" action="MAILTO:hey@anteanstudios.com" enctype="text/plain">
  <div class="col-2">
    <label>
      Name
      <input name="name" placeholder="What is your name?" tabindex="1" />
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
      <input name="role" placeholder="What is your role at your company?" tabindex="1" />
    </label>
  </div>
  <div class="col-2">
    <label>
      How did you hear about us?
      <input name="hear" placeholder="How did you find out about Propeurbs?" tabindex="2" />
    </label>
  </div>
  <div class="col-3">
    <label>
      Phone
      <input name="phone" placeholder="What is the provider's phone number?" tabindex="3" />
    </label>
  </div>
  <div class="col-3">
    <label>
      Email
      <input name="email" placeholder="What is the provider's email?" tabindex="4" />
    </label>
  </div>
  <div class="col-3">
    <label>
      What is your business status
      <select tabindex="5">
        <option>Select your status</option>
        <option>I Just have an idea</option>
        <option>I'm starting my business soon</option>
          <option>I started less than 3 months</option>
          <option>I started more than 3 months</option>
          <option>I started more than a year ago</option>
      </select>
    </label>
  </div>
            <div class="col-1">
            <label>
                Explain your business in a few words
                <textarea name="message" placeholder="Please describe what type of service you are providing in a few words" tabindex=""></textarea>
                </label>
            </div>
  <div class="col-submit">
    <button type="submit">Submit</button>
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
