<?php
if(isset($_POST['submit']))
   {
       
   
   
   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['phone'];
   $danceform = $_POST['danceform'];
       
    $servername = "localhost";
    $username = "dancehel_micro";
    $password = "2&S#u*u?]t,K";
    $dbname = "dancehel_micro";

   
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Registration (name, email, phone,danceform)
VALUES ('$name', '$email', '$number','$danceform')";

if (mysqli_query($conn, $sql)) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
   
   
   $subject = "From .$name";
   $html1 = "<html>

		<style>
			td
			{
				padding:2%;
				width:150px;
				border:0px solid black;
				box-shadow:1px 0px 4px 0px #fff5ca;
				border-radius:5px;
			}
		</style>
	</head>
	<body>
		<center><div id='appointmentTemplate' style='background-color:#f9f9f9; width:70%; padding:4%;'>
			<div id='templateInner' style='text-align:left; margin:auto; width:80%; background-color:white; box-shadow:1px 1px 6px 6px #e2e5ff; padding:4%;'>
				Hello admin,<br>
                Someone has  request for you. Here are the details:
                <hr>
				<table>
					<tr>
					    <td><b> Instructor</b>:</td><td>".$name."</td>
					</tr>
					
					<tr>
					    <td><b>Email</b>:</td> <td>".$email."</td>
					</tr>
					<tr>
					    <td><b>Number </b>:</td> <td>".$number."</td>
					</tr>
					<tr>
					    <td><b>Dance Form</b>:</td> <td>".$danceform."</td>
					</tr>
					
				</table>
                <hr>
                Thanks.<br>
                Website: https://www.Domain.com/
            </div>
        </div></center>
    </body>
</html>";
require("smtpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "server.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Username = "support@server.com";
$mail->Password = "%rX0AN#Aq$4J";
$mail->From = "support@Server.com";
$mail->FromName = "Server  $name ";
$mail->AddAddress("support@gmail.com");

$mail->AddAddress("test@registration.server.com");
$mail->AddReplyTo($email, 'From the Admin Server');

$mail->IsHTML(true);
// Email body content
$mail->Body =  $html1;
$mail->Subject =  $subject;
// Send email
if(!$mail->send())
{ 
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
   echo "<script>window.location='https://registration.server.com/thank-you.php';</script>";
   //header("Location: index.php");
}
       
       
   }
?>
