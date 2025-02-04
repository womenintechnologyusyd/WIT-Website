<?php include "test.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<style>
	body {
		font-family:"Open Sans", Helvetica, Arial, sans-serif;
		line-height: 1.5;
	}
	.container {
		max-width:600px;
		width:100%;
		margin:0 auto;
	}
	form{
		width: 100%;
	}
	label{
		font-weight: bold;
		margin-bottom: 15px;
	}
	input, textarea {
		font-family:"Open Sans", Helvetica, Arial, sans-serif;
		width:100%;
		border:2px solid #c1cdcd;
		background:#FFF;
		margin:0 0 5px;
		padding:10px;
	}
	fieldset {
		border: medium none !important;
		margin: 0 0 10px;
		min-width: 100%;
		padding: 0;
		width: 100%;
	}
	button{
		cursor: pointer;
		width: 100%;
		border:none;
		background:rgb(3, 52, 212);
		color:#FFF;
		margin:0 0 5px;
		padding:10px;
		font-size:15px;
	}
</style>
</head>
<body>

	<div class="container">
		<h1>Contact</h1>
		<form method="post">
			<fieldset>
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter Name">
			</fieldset>
			<fieldset>
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Email">
			</fieldset>
			<fieldset>
				<label>Message</label>
				<textarea name="message" placeholder="Enter your Message..."></textarea>
			</fieldset>
			<fieldset>
				<button type="submit" name="submit">Submit</button>
			</fieldset>
		</form>
	</div>

</body>
</html>