<!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    
         <script type="text/javascript" src="javascr.js"></script>

    </head>
    <body>
      
        
<?php
require'UI.php';
require 'config.php';
 require 'create.php';
require 'update.php';
require 'display.php';
?>
 <script >

table = document.getElementById("table");
                
 function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                     document.getElementById("changingText").innerHTML="Update Record";
                       document.getElementById("savebtn").disabled = true;
                       // document.getElementById("btnReset").disabled=false;

                     
                    document.getElementById("updatbtn").disabled = false;

                      document.getElementById("emp_Id").value = this.cells[0].innerHTML;
                      document.getElementById("emp_Name").value = this.cells[1].innerHTML;
                      document.getElementById("email_id").value = this.cells[2].innerHTML;
                      document.getElementById("skype_id").value = this.cells[3].innerHTML;
                       document.getElementById("Mobile_no").value = this.cells[4].innerHTML;
                      //document.getElementById("file").value = this.cells[5].inenrHTML;
      
                        
                    };
                }
            }
        selectedRowToInput();//Call the javascript function

 document.getElementById("updatbtn").disabled = true;
  
    

        </script>
</body>
</html>

