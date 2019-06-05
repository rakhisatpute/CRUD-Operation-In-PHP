<?php

$target_dir = 'upload/';
 
//Check if the directory already exists.
if(!is_dir($target_dir)){
    //Directory does not exist, so lets create it.
    mkdir($target_dir, 0755,true);
   
}
            if(isset($_POST['submit']))
            {
                $emp_Name=$_POST['txtName'];
                $email_Id=$_POST['txtEmail'];
                $skype_Id=$_POST['txtSkype'];
                $mobile_No=$_POST['txtMobile'];
                $name = $_FILES['file']['name'];
               

  
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){


    $sql="select * from save_record where (email_Id='$email_Id');";
            $res=mysqli_query($conn,$sql);
          if (mysqli_num_rows($res) > 0) {

         $message= "Email Id  already exists";

             echo  "<script type='text/javascript'>alert('$message');</script>";
           }
          else{
                $query =" insert into save_record (emp_Name,email_Id,skype_Id,mobile_No,name)
                 values('$emp_Name','$email_Id','$skype_Id','$mobile_No','$name')";

                $qry=mysqli_query($conn,$query);

                 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
               }

}   
}          
?>

