<?php
    
    if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg']) ){
        
        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $age = filter_var($_POST["age"], FILTER_SANITIZE_STRING);
        $city = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
        $course = filter_var($_POST["course"], FILTER_SANITIZE_STRING);
        $to = "carla@youngleaders.world";	 // Tape Your Email Here 
        $from = $email;
        $subject = "Interested to know more details about your course";
        $message = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$email.' <br><b>Age:</b> '.$age.' <br><b>Age:</b> '.$age.' <br><b>Course:</b> '.$course.'</p>';
        $headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        
        if( mail($to, $subject, $message, $headers) ){
            
            echo "success";
            
        } else {
            
            echo "The server failed to send the message. Please try again later.";
            
        }
    }

?>