<?php include("head.php"); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '263891400700946', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=263891400700946&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->


<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $project = $_POST['project'];
    $budget = $_POST['budget'];
    $website = $_POST['website'];
    $message = $_POST['message'];
    $hear = $_POST['hear'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter a valid email address.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'hey@anteanstudios.com';
            $emailSubject = 'New Business Submitted by '.$name;
            $htmlContent = '<h2>New Business Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Company</h4><p>'.$company.'</p>
                <h4>Phone</h4><p>'.$phone.'</p>
                <h4>Project</h4><p>'.$project.'</p>
                <h4>Budget</h4><p>'.$budget.'</p>
                <h4>Website</h4><p>'.$website.'</p>
                <h4>Hear</h4><p>'.$hear.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your request submission failed, please try again.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Please fill all the required fields.';
        $msgClass = 'errordiv';
    }
}
?>

<style>
.col{
        border: 1.5px solid lightgray;
        padding: 10px;
    }
h3, p{
        margin: 10px;
        color: gray;
}

* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.img {
  position: relative;
  border: 1px solid #333;
  margin: 2%;
  overflow: hidden;
  width: 540px;
}
img {
  max-width: 100%;

  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

    b {
        font-weight: 800;
        text-transform: uppercase;
    }
</style>
<?php include("menu.php"); ?>
<body>
	<div class="top-page">
            <img src="img/Antean_newbusiness.png" width="42%">
            <h1>Thank you for contacting us! <br>Your request has been sent.</h1>
	</div>
        <div class="container">
        <h3>No worries, we will get back at you as soon as possible</h3>
            <p> We are happy to be added in your wishlist and would be delighted to move up to your preferred list. Jean will get in touch with you about your request in, normally, 1 business day.
            <br>If you would like to speed up the process you can call the office at 905-580-5923 or call/text Jean personally at 904-438-4353.<br>Thank you and we are looking forward to working
          with you or your company. </p>
<br><br>

</div>

 <?php include("footer.php"); ?>
