<?php 
if(isset($_POST['submit'])){
    $to = "<sreevidya.ganga0@gmail.com>"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Fingers Crossed this Works";
    $subject2 = "the f is this";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['state'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['state'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if (mail($to,$subject,$message,$headers))
    {
        echo "Message sent! \n\n"; 
    }
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>