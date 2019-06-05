<?php
   $sql = "SELECT  emp_Id,emp_Name, email_id ,skype_id,Mobile_no,name FROM save_record";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     // var_dump($row);
        ?>

        <td> <?php echo $row["emp_Id"];?> </td>
        <td> <?php echo $row["emp_Name"];?></td>
        <td> <?php echo  $row["email_id"];?></td>
        <td> <?php echo $row["skype_id"];?></td>
        <td> <?php echo $row["Mobile_no"];?></td>
        <td> <img src="<?php echo 'upload/'.$row["name"];?>" height="100" width="100" /></td>
        <td><!-- <input  type="submit" value=" Delete" name="delete" /> --> 
          <a href="delete.php?emp_Id=<?php echo $row['emp_Id'];?>">Delete</td>
       </tr>
       <?php 
    }
}
 else {
    echo "0 results";
}
?>
</table>
</form>