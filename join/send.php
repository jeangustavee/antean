<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $linkedin = $_POST['linkedin'];
    $employed = $_POST['employed'];
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
            $emailSubject = 'Job Application Submitted by '.$name;
            $htmlContent = '<h2>Job Application Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>lastname</h4><p>'.$lastname.'</p>
                <h4>email</h4><p>'.$email.'</p>
                <h4>phone</h4><p>'.$phone.'</p>
                <h4>Linkedin link</h4><p>'.$linkedin.'</p>
                <h4>employed</h4><p>'.$employed.'</p>
                <h4>hear</h4><p>'.$hear.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your Application has been submitted successfully! We will contact you shortly if your profile meets our requirements';
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
