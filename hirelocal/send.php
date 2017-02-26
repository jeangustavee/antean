<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $website = $_POST['website'];
    $years = $_POST['years'];
    $phone = $_POST['phone'];
    $hire = $_POST['hire'];
    $support = $_POST['support'];
    $bio = $_POST['bio'];
    $accomplishments = $_POST['accomplishments'];
    $struggles = $_POST['struggles'];
    $strategy = $_POST['strategy'];
    $share = $_POST['share'];
    $hear = $_POST['hear'];

    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($phone) && !empty($accomplishments) && !empty($struggles) && !empty($strategy) && !empty($share) && !empty($title) && !empty($bio)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter a valid email address.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'hey@anteanstudios.com';
            $emailSubject = 'Information Submitted by '.$name;
            $htmlContent = '<h2>HIRE LOCAL Submitted</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Title</h4><p>'.$title.'</p>
                <h4>Website</h4><p>'.$website.'</p>
                <h4>Years</h4><p>'.$years.'</p>
                <h4>Hire</h4><p>'.$hire.'</p>
                <h4>Phone</h4><p>'.$phone.'</p>
                <h4>Support</h4><p>'.$support.'</p>
                <h4>Bio</h4><p>'.$bio.'</p>
                <h4>Accomplishments</h4><p>'.$accomplishments.'</p>
                <h4>Struggles</h4><p>'.$struggles.'</p>
                <h4>Startegy</h4><p>'.$strategy.'</p>
                <h4>Share</h4><p>'.$share.'</p>
                <h4>Hear</h4><p>'.$hear.'</p>';

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
