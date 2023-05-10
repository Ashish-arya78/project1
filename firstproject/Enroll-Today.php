<!DOCTYPE html>
<html>
<head>
	<title>ENROLL NOW - Pentamedia Technologies</title>
	<link rel="icon" href="Pentamedia-Logo.png">
	<link rel="stylesheet" href="css/font-awsome.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>

 <body style="overflow-x:hidden;">

 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; font-size:20px;">
		<img src="Pentamedia-Logo.png" style="padding:5px 5px; width:180px; margin:auto;">
		<h1 style="text-align:center; color:#222; font-family:'Lucida Console', 'Courier New',monospace;">Pentamedia Technologies</h1>
		<p style="text-align:center; color:#747474; font-size:15px; font-family:'Times New Roman', Times,serif;">TRAINING THAT YOU CAN TRUST</p>
		<div>
			<ol>
				<li style="display:inline; line-height:80px; padding:0px 12px;"><a href="Home.html" style="color:#222; font-size:18px; text-decoration:none; padding:0px 30px; margin:0px 20px; font-family: Arial, Helvetica, sans-serif;">HOME</a></li>
		    	<li style="display:inline; line-height:80px; padding:0px 12px;"><a href="About Us.html" style="color:#222; font-size:18px; text-decoration:none; padding:0px 30px; margin:0px 20px; font-family: Arial, Helvetica, sans-serif;">ABOUT US</a></li>
				<li style="display:inline; line-height:80px; padding:0px 12px;"><a href="Courses.html" style="color:#222; font-size:18px; text-decoration:none; padding:0px 30px; margin:0px 20px; font-family: Arial, Helvetica, sans-serif;',monospace;">COURSES</a></li>
			</ol>
		</div>	
	</div>


	<h1  style="text-align:center; color:#222; font-weight:bold; font-family:'Times New Roman', Times,serif;">ENROLL NOW</h1>

	<form style="margin:0px; background:url(Form-Image.jpg)fixed; background-size:cover;">
		<div style="width:500px; margin:50px auto; padding:50px;">
			<form method="post">
				<label style="line-height:50px; color:#595959; font-size:20px; font-family:'Georgia', Times,serif;">Your - Name <span style="color:#cc0000;">[Required]</span></label>
				<input type="text" name="Name" style="width:100%; height:40px; margin-bottom:10px; background:#ffe6ea; border:0px; padding:2%; outline:5px double #595959; color:#595959;">

				<label style="line-height:50px; color:#595959; font-size:20px; font-family:'Georgia', Times,serif;">Your - Email <span style="color:#cc0000;">[Required]</span></label>
				<input type="text" name="Email" style="width:100%; height:40px; margin-bottom:10px; background:#ffe6ea; border:0px; padding:2%; outline:5px double #595959; color:#595959;">

				<label style="line-height:50px; color:#595959; font-size:20px; font-family:'Georgia', Times,serif;">Your - Contact <span style="color:#cc0000;">[Required]</span></label>
				<input type="text" name="Contact" style="width:100%; height:40px; margin-bottom:10px; background:#ffe6ea; border:0px; padding:2%; outline:5px double #595959; color:#595959;">

				<label style="line-height:50px; color:#595959; font-size:20px; font-family:'Georgia', Times,serif;">Your - Subject</label>
				<input type="text" name="Subject" style="width:100%; height:40px; margin-bottom:10px; background:#ffe6ea; border:0px; padding:2%; outline:5px double #595959; color:#595959;">

				<label style="line-height:50px; color:#595959; font-size:20px; font-family:'Georgia', Times,serif;">Your - Address</label>
				<textarea name="Address" style="width:100%; height:80px; margin-bottom:10px; background:#ffe6ea; border:0px; padding:2%; outline:5px double #595959; color:#595959;"></textarea>

				<label style="line-height:50px; color:#595959; font-size:20px; font-family:'Georgia', Times,serif;">Your - Message</label>
				<textarea name="Message" style="width:100%; height:80px; margin-bottom:10px; background:#ffe6ea; border:0px; padding:2%; outline:5px double #595959; color:#595959;"></textarea>

				<input type="Submit" name="Send" value="Send" style="width:50%; height:40px; margin:15px 95px; padding:20px 20px; background-color:#004d00; color:#FFFFFF; border-style: solid; border-radius:2px; padding:2%;"> 
			</form>
		</div>
	</form>

	<?php 
		if(isset($_POST['Send']))
		{
			$Name=$_POST['Name'];
			$Email=$_POST['Email'];
			$Contact=$_POST['Contact'];
			$Subject=$_POST['Subject'];
			$Address=$_POST['Address'];
			$Message=$_POST['Message'];

			$connect=mysqli_connect("localhost", "root", "", "project");

			$insert=mysqli_query($connnect, "insert into enroll-today(Name, Email, Contact, Subject, Address, Message) values('$Name', '$Email', '$Contact', '$Subject', '$Address', '$Message')");
		}
		else
		{

		}
	?>

</body>
</html>