<?php


if(isset($_POST['submit'])) {

	header("Location: http://www.witusyd.com");
    exit();

	// //Email enquiry will be sent to
	// $mailTo = "president@witusyd.com";

	// //User's Input
	// $firstName = $_POST['first_name'];
	// $lastName = $_POST['last_name'];
	// $email = $_POST['email'];
	// $subject = $_POST['subject'];
	// $message = $_POST['message'];

	// //Checking for valid input
	// if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
	// 	$nameErr = "Only letters and white space allowed";
	// 	echo '<script type="text/javascript">alert($nameErr);</script>';
	// }

	// //Email Formatting
	// $headers = "From:" .$email;
	// $txt = "You have recieved a message from " .$firstName .$lastName. "\n\n\n".$message;

	// $result = mail($mailTo, $subject, $txt, $headers);

	// // if ($result) {
    // //     echo '<script type="text/javascript">alert("Your message was sent!");</script>';
    // //     echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	// // } else {
    // //     echo '<script type="text/javascript">alert("Oops! Your message wasn’t sent. Try again later.");</script>';
    // //     echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
    // // }
	// header(Location: "contactus.jinja?emailsent");

}


?>