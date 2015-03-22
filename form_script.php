<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="shortcut icon" href="images/logo-small.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mail sent</title>
	<link rel="stylesheet" href="css/general.css" />
	<link rel="stylesheet" href="css/homepage.css" />
    
    <style>
        .mail-sent {
            background-color: #0088cc;
            text-align: center;
        }
    </style>
    
</head>

    <body class="mail-sent">
    <?php

        /*$name=$_POST ['name'];
        $email=$_POST ['email'];
        $budget=$_POST ['budget'];
        $message=$_POST ['message'];
        $data=$name . "," . $email . "," . $budget . "," . $message;
        $file= "contactform.csv;*/
        
        
        $to = "fredrik@amazive.com";
        $name=$_POST['name'];
        $subject=$_POST ['email'];
        $budget=$_POST ['budget'];
        $message="Namn:" .$_POST['name']. "\nBudget:" .$_POST['budget']. "\n" .$_POST[message2];
        $from =$_POST['email'];
        $headers= "From:" . $from;
        
        mail($to,$subject,$message,$headers);
            
        //"From: " .$_POST['name'].
        
        
        /*$headers ="From:" . $from . "\r\n\";
        $headers .= "Budget:" . $budget "\r\n\";*/
        
        
    ?> 
    <div style="margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0; height: 150px;">
        <h1>YOUR E-MAIL IS SENT</h1>
        <p style="margin-top: 10px;">We will reply within the speed of light.</p>
        <a href="http://www.amazive.com" target="_blank"><div style="margin-top: 20px; width: 300px;"class="portfolio-buttom">Return to amazive</div></a>
    </div>    
    
    
 
    
  
</body>
</html>