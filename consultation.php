<?php
if (isset($_POST['submit-btn'])){
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $service = $_POST['service'];
  $message = $_POST['message'];

  $to = 'hlongwanesiyabonga6@gmail.com';
  $subject = $service;
  $message = "Name: " .$firstName.' '.$lastName."\n"."Email: ".$email."\n"."Phone: ".$phone."\n"."Service: ".$phone."\n"."Message: "."\n".$message;
  $headers = $firstName;
  $headers .= "Reply-To: Support <$to>\r\n";
    $headers .= "Return-Path: Support <$to>\r\n";
    $headers .= "From: $firstName <$firstName>\r\n";
    $headers .= "Organization: Hela Inc.\r\n";
    $headers .= "Content-Type: text/plain\r\n";


  if(mail($to, $subject, $message)){
    echo "<div style='background: linear-gradient(#B39456, #F7ED9C, #d4b74d); padding:100px; height: 150px; text-align: center;'>
    <h2> Sent Successfully! Thank you ".$firstName.  ". We will contact you shortly <br> Click <a style='color: red;' href='http://hela.co.za/'>here</a> to go back to the home page
    </h2>
    </div>
    " ;

  }else {
    echo "Something went wrong!";
  }
}
?>