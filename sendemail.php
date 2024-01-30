<?php
//    $fname = $_POST['fname'];
//    $lname = $_POST['lname'];
//    $email= $_POST['email'];
//    $contact = $_POST['mobile'];

//    $email_from = "$email";
//    $email_subject = 'New Form Submission';
//    $email_body = "You have received a new message from the user $fname.\n".
//                             "Here is the message:\n $contact"

//     $to = "akaishu1995@gmail.com";

//     $headers = "From: $email_from \r\n";
                          
//     $headers .= "Reply-To: $email \r\n";

//     mail($to,$email_subject,$email_body,$headers)
    
// if(isset($_POST['emailName'])){
//     $to = "aishwarya@tip.agency";
//     // $sub = $_POST['subject'];
//     $from = $_POST['emailName']; // this is the sender's Email address
//     $name = $_POST['fname'];
//     // $msg = $_POST['message']; 
//     $subject = "Form submission";
//     $subject2 = "Copy of your form submission";
//     $message = "Subject:" . $sub . "\n\n Name:" . $name . "\n Email: " . $from . "\n";

//     $headers = "From:" . $from;
//     mail($to,$subject,$message,$headers);
//     }

$fname = $_POST['firstname'];
   $lname = $_POST['lastname'];
   $email= $_POST['email'];
   $contact = $_POST['mobile'];
   $email_subject = 'New Form Submission';
   $email_body = "You have received a new message from the user $fname.\n".
                            "Here is the message:\n $contact";

    $to = "akaishu1995@gmail.com";


$headers = "From: " . $email . "\r\n" .
"Reply-To: $email";

$result = mail($to,$email_subject,$email_body,$headers);
if($result){
     header("Location:https://gcproductions.in/Baeru/contact.html");
}
else{
    echo 'error';
}
?>