<?php
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email= $_POST['email'];
    $contact = $_POST['mobile'];
    $job = $_POST['job_role'];
    $msg = $_POST['message'];
    $email_subject = 'New Form Submission';
    $email_body = "You have received a new message from the user $fname.\n".
                             "Here is the message:\n $msg. \n". ;
 
     $to = "akaishu1995@gmail.com";
 
 
 $headers = "From: " . $email . "\r\n" .
 "Reply-To: $email";
 
 $result = mail($to,$email_subject,$email_body,$headers);
 
 if($result){
    //   header("Location:https://gcproductions.in/Baeru/career.html");
 }
 else{
     echo 'error';
 }
?>