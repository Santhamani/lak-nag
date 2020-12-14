<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            $to = "contact@lakshyait.in"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $first_name = $_POST['name'];
            $email = $_POST['email'];
            $subject = "Form submission";
            $subject2 = "Copy of your form submission";
            $message = $first_name . " " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
            $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
        
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            //mail($to,$subject,$message,$headers);
            //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            // You can also use header('Location: thank_you.php'); to redirect to another page.
            $message_sent = true;
        }

    }
    if($message_sent){
        $message = "Form sent successfully. Thank you! " . $first_name . ", we will contact you shortly.";
    }
    else{
        $message = "Please try again later!";
    }
?>
<html>
    <head>
        <script> setTimeout ("location.href = 'http://www.lakshyait.in';",5000); </script>
        <style>
            body {
              background: #293f50;
              color: #888;
              font: 300 16px/22px "Lato", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            }
            div.container4 {
                height: 10em;
                position: relative }
            div.container4 p {
                margin: 0;
                background: #293f50;
                position: absolute;
                top: 50%;
                left: 50%;
                margin-right: -50%;
                transform: translate(-50%, -50%) }
        </style>
    </head>
    <body>
        <div class=container4>
          <p><?php print $message ?></p>
        </div>
    </body>
</html>
