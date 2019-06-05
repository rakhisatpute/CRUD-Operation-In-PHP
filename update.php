 <?php

 if(isset($_POST['update']))
     {
      $emp_Id=$_POST['txtId'];
      $emp_Name=$_POST['txtName'];
      $email_id=$_POST['txtEmail'];
      $skype_id=$_POST['txtSkype'];
      $Mobile_no=$_POST['txtMobile'];
      $name = $_FILES['file']['name'];
if($name=="")
{
 $query="update save_record set emp_Name='$emp_Name', email_id='$email_id',skype_id='$skype_id',Mobile_no='$Mobile_no' where emp_Id='$emp_Id'";

        $qry=mysqli_query($conn,$query); 
}
else

{
   $target_dir = "upload/";

  $res=mysqli_query($conn,"select name from save_record where emp_Id='$emp_Id'");
  $row=mysqli_fetch_array($res);

//echo $target_dir.$row['name'];
unlink($target_dir.$row['name']);
 
      $query="update save_record set emp_Name='$emp_Name', email_id='$email_id',skype_id='$skype_id',Mobile_no='$Mobile_no',name='$name' where emp_Id='$emp_Id'";


        $qry=mysqli_query($conn,$query);
          $target_dir = "upload/";

        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);//Move uploaded file to a new location. 1.para:Name of File 2.Name of destination


if($qry)
{
echo "Successful";
echo "<br>";

}

else {
echo "ERROR";
}
     }
   }

   ?>