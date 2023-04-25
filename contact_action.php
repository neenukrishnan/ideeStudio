<?php
 $name=$_POST["name"];
 $mail=$_POST["email"];
 $message=$_POST["message"];
 $phone=$_POST["phone"];

 $to = "neenukrishnan90@gmail.com";
 //$to = "mail@ideestudio.in";
 $subject = "Mail From" . $mail ;

 $txt ="Name : " . $name . "\r\n Phone: " . $phone . "\r\n Message : " . $message;
 $headers = "From:" . $mail . "\r\n";

 if($mail!=NULL && $name!=NULL && $message!=NULL)
    { //mail($to,$subject,$txt,$headers);
     mail($to,$subject,$txt,$headers);
     echo "<script>alert('Thank you for getting in touch! ');</script>";
     echo "<script>document.location.href='contact.php'</script>";
    }
    else{
        echo "<script>alert('Mail was not sent. Please try again later');</script>";
        echo "<script>document.location.href='contact.php'</script>";
    }
?>