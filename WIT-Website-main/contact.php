<?php include 'email.php';?>

<!DOCTYPE html>
<html lang="en">

 <!-- Metadata for the page -->
    <head>
        <!-- Meta Viewport Tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Link to the CSS stylesheet -->
        <link rel="stylesheet" href="style.css">

        <script src="https://www.w3schools.com/lib/w3.js"></script>
        
        <!-- Title of webpage in the browser -->
        <meta charset="UTF-8">
        <title>Women in Technology USYD</title>
    </head>

    <!-- All visible content on the page -->
    <body>

     <!-- Navigation -->
     <nav class="navbar">
        <div class="logo">
            <img img id="WITlogo" alt="WIT Logo" src="Images/WIT_Logo_circle.png" width="40px">
        </div>
        
        <ul>
            <li><a class="active" href="index.html">Home</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="publication.html">Publications</a></li>
            <li style="float:right"><a class="active" href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
   
    <section>
        <h1> Meet our Team!</h1>
        <div class="many_center">
            <div class="profile">
                <img img id="profiles" alt="Portrait Placeholder" src="Images/Portrait_Placeholder.png" width="200px">
                <p>President</p>
            </div>
            <div class="profile">
                <img img id="profiles" alt="Portrait Placeholder" src="Images/Portrait_Placeholder.png" width="200px">
                <p>Vice-President</p>
            </div>
            <div class="profile">
                <img img id="profiles" alt="Portrait Placeholder" src="Images/Portrait_Placeholder.png" width="200px">
                <p>Vice-President</p>
            </div>
        </div>
        <br>
        <div class="many_center">
            <div class="profile">
                <img img id="profiles" alt="Portrait Placeholder" src="Images/Portrait_Placeholder.png" width="200px">
                <p>President</p>
            </div>
            <div class="profile">
                <img img id="profiles" alt="Portrait Placeholder" src="Images/Portrait_Placeholder.png" width="200px">
                <p>Vice-President</p>
            </div>
            <div class="profile">
                <img img id="profiles" alt="Portrait Placeholder" src="Images/Portrait_Placeholder.png" width="200px">
                <p>Vice-President</p>
            </div>
        </div>

    </section>

    <section>
        <h1>Contact Us</h1>

        <form method="post" action="">
            <!-- <textarea name="message"></textarea>
            <input type="submit"> -->
            <!-- <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter typename here">
            <br>

            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" placeholder="Enter typename here">
            <br>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Enter typename here">
            <br>
            
            <label for="message">Message:</label>

            <textarea name="message" placeholder="Enter Message here"></textarea>
            <br>
            
            <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit</button> -->

            <fieldset>
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter Name">
			</fieldset>
			<fieldset>
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Email">
			</fieldset>
            <fieldset>
				<label>Subject</label>
				<input type="subject" name="subject" placeholder="Enter Subject">
			</fieldset>
			<fieldset>
				<label>Message</label>
				<textarea name="message" placeholder="Enter your Message..."></textarea>
			</fieldset>
			<fieldset>
				<button type="submit" name="submit">Submit</button>
			</fieldset>
           
        </form>
        
    </section>

</body>

</html>