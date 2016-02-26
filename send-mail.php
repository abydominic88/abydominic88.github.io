<?php
if($_POST){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
}

$to = "a3.dominic@gmail.com";
$subject = "Contact from my website";
$txt = "Name". $name . "<br> Email" . $email . "<br> Phone" .$phone. "<br> Message" .$message. "<br>";
$headers = "From: ".$email . "\r\n" .
"CC: ";

$a =mail($to,$subject,$txt,$headers);

if($a){ 
	?>
<script type="text/javascript">
         
            function Redirect() {

               window.location="index.html";
               
            }
            
            document.write("You will be redirected to main page in 10 sec.");
            Redirect();
         
      </script>
      <?php
}
else{
	?>
	<script type="text/javascript">
         
            function Redirect() {
               window.location="index.html";
               setTimeout(alert("hello"),10000);
            }
            
            Redirect();
         
      </script>

      <?php

}
?>