<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $business = $_POST['business'];
    $website = $_POST['website'];
    $instagram = $_POST['instagram'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $description = $_POST['description'];
    $sponsor = $_POST['sponsor'];
    $status = $_POST['status'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($description)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter a valid email address.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'hey@anteanstudios.com';
            $emailSubject = 'Information Submitted by '.$name;
            $htmlContent = '<h2>After Work Networking Mixer Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Business</h4><p>'.$business.'</p>
                <h4>Website</h4><p>'.$website.'</p>
                <h4>Instagram</h4><p>'.$instagram.'</p>
                <h4>Position</h4><p>'.$position.'</p>
                <h4>Phone</h4><p>'.$phone.'</p>
                <h4>Description</h4><p>'.$description.'</p>
                <h4>Sponsor</h4><p>'.$sponsor.'</p>
                <h4>Status</h4><p>'.$status.'</p>';

            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Additional headers
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Your information has been submitted successfully !';
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
