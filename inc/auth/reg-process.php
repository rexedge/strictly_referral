<?php
     extract($_POST);
     include("../conn/db-connect.php");
     $sql=mysqli_query($conn,"SELECT * FROM `admin` where Email='$email'");
     if(mysqli_num_rows($sql)>0)
          {
               header ("Location: ../../admin-signup.php?status=Email Already Exist");
               exit;
          }
     elseif (isset($_POST['save']))
     {
          $file = "PP"."-".$username.".jpg";
          $file_loc = $_FILES['file']['tmp_name'];
          $folder="../img/upload/";
          $new_file_name = strtolower($file);
          $final_file=str_replace(' ','-',$new_file_name);
          if(move_uploaded_file($file_loc,$folder.$final_file))
          {
               $query="INSERT INTO admin(First_Name, Last_Name, username, role, Email, Password, File ) VALUES ('$first_name', '$last_name', '$username', '$role', '$email', '$pass', '$final_file')";
               $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
               header ("Location: ../../dashboard?status=success");
          }
          else 
          {
               echo "Error.Please try again";
          }
     }
?> 