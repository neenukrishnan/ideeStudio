<?php
 $name=$_POST["name"];
 $mail=$_POST["email"];
 $phone=$_POST["phone"];
 $address=$_POST["address"];
$sqtft=$_POST["sqfeet"];
$area=$_POST["area"];
$type=$_POST["type"];
$attachment=$_FILES['attachment'];


$to = "mail@ideestudio.in";

$txt ="Name : " . $name . "\r\n  Phone : " . $phone . "\r\n  Address : " . $address . "\r\n  Square Feet : " . $sqtft . "\r\n  Area : " . $area . "\r\n  Type : " . $type;

$headers = "From:" . $mail . "\r\n";

if($mail!=NULL && $name!=NULL && $phone!=NULL && $address!=NULL && $sqtft!=NULL && $area!=NULL && $type!=NULL)
{ //mail($to,$subject,$txt,$headers);
 mail($to,$subject,$txt,$headers,$attachment);
 echo "<script>alert('Thank you for getting in touch! ');</script>";
 echo "<script>document.location.href='about.php'</script>";
}
else{
    echo "<script>alert('Mail was not sent. Please try again later');</script>";
}
?>