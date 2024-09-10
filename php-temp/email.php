<?php

    // NEED TO SET UP A MAIL SERVER???

    if(isset($_POST['submit'])) {
        $to = "secretary@wituysd.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];

        //Email body I will receive
        $message = "Client Name: " . $name . "\n"
        . "Client Message: " . "\n" . $_POST['message'];

        $headers = "From: " . $email;

        $result = mail($to, $subject, $message, $headers);


        if ($result)
        {
            echo '<script type="text/javascript">alert("Your message was sent!");</script>';
            echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

        }
        else
        {
            echo '<script type="text/javascript">alert("Oops! Your message wasn’t sent. Try again later.");</script>';
            echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
        }
    }





?>