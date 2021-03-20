<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style type="text/css">
    	div
    	{
    		width: 100%;
    		height: 100%;
    		left: 5%;
    		position: relative;
    		text-align: center;
    	}
    	button
    	{
    		left: 35%;
    		position: absolute;
    	}
    	body
    	{
    		background-color:aqua;
    		top: 15%;
    		left: 35%;
    		position: absolute;
    	}
    </style>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <div class="container-fluid">
<form action="izoh" method="post">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Subject</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="subject">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Message</label>
    <input type="text" class="form-control" id="exampleInputPassword2" name="message">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

  </body>
</html>

<?php

require('vendor/autoload.php');
require "includes/PHPMailer.php";
require "includes/SMTP.php";
require "includes/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure="ssl";
$mail->Host="smtp.gmail.com";
$mail->Port="465";
$mail->isHtml();
$mail->Username="ibrohimabbosov757@gmail.com";
$mail->Password="wbhvvddvrzrtcyiz";
$mail->SetFrom($_POST['email']);
$mail->Subject=$_POST['subject'];
$mail->Body=$_POST['message'];
$mail->addAddress("ibrohimabbosov657@gmail.com");

$mail->Send();

?>