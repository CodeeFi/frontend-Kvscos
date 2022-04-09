<?php
$Name= $_POST["Name"];
$Email= $_POST["Email"];
$Session= $_POST["Session"];
$Department= $_POST["Department"];
$Password= $_POST["Password"];
$Repassword= $_POST["Repassword"];

//database connection
$conn = new mysqli('localhost','root','','athar');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);

}else{
    $stmt = $conn->prepare ('insert into Admin(Name,Email,Session,Department,Password,Repassword) values(?,?,?,?,?,?)');
    $stmt->bind_param ("ssssss",$Name,$Email,$Session,$Department,$Password,$Repassword);
    $stmt->execute();
    echo"registration successful!";
    $stmt->close();
    $conn->close();
}?>
