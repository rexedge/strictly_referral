<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include '../conn/db-connect.php';
    $sql=mysqli_query($conn,"SELECT * FROM admin where Email='$email' and Password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name']; 
        header("Location: ../../dashboard"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>