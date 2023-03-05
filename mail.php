<?php //get data from
 form $name = $_POST['name'];
  $email= $_POST['email'];
   $message= $_POST['message'];
    $to = "nouraljasim@gmail.com";
     $subject = "Mail From website";
      $txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message;
       $headers = "From:n00r95.github.io/contact.html" . "\r\n" . "CC: n00r95.github.io"; 
       if($email!=NULL){ mail($to,$subject,$txt,$headers); } 
       //redirect
        header("Location:index.html"); ?>