<?php

echo "<h2>Inside PHP FORM </h2>"	

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        echo "<h2>Submit processed </h2>"	
        header("Location: contactus.jinja?mailsent");
        exit();
    }
}
?>