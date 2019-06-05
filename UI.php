<form name="myForm"  method="post" enctype='multipart/form-data' >

   <h1  align="center" id="changingText">Add Employee Records</h1>
      <table align="center">
          <tr>
                     <input type="text" name="txtId" id="emp_Id" hidden="txtId"  />
              <td>    Employee Name : 
              </td>

              <td>    <input type="text" name="txtName" id="emp_Name" onKeyPress="return ValidateAlpha(event);" 
                     placeholder="Employee Name" required="Please add Employee Name" onchange="myFunction()" autofocus="txtName" />
              </td>
          </tr>

          <tr>
              <td>    Employee Email :</td>
              <td>    <input type="text" name="txtEmail" id="email_id"  onblur="checkEmail(this.value)" 
                      placeholder="Email Id" required="Please Add Email Id"/>
              </td>
          </tr>

          <tr>
              <td>    Employee Skype Id :
              </td>
              <td>   <input type="text" name="txtSkype" id="skype_id" placeholder="Skype Id" required="Please Add Skype Id">
              </td>
          </tr> 

          <tr>
              <td>    Employee Mobile: 
              </td>
              <td>    <input type="text" maxlength="10" onkeypress="return isNumber(event)"  name="txtMobile" id="Mobile_no" 
                      placeholder="Mobile No" required="Please Add Mobile No"  >
              </td>
          </tr> 
          
          <tr>
              <td>      <input type='file' name='file' id="profile-img"  />
              </td>
          </tr>

     
          <tr>
              <td>
              </td>
              <td>
                        <input type="submit" name="submit" value="Save" id="savebtn" onclick=" return validimg()" >
                        <input type="submit" name="update" value="Update" id="updatbtn" onclick="doClear();" > 
              </td>
            </tr>
            <tr>
            </tr><tr></tr>
     </table>
        

<table id="table" align="center"   border="1">
          <tr>
            <th>Employee Id</th>
              <th>Employee Name</th>
              <th>Email Id</th>
              <th>Skype Id</th>
              <th>Mobile No</th>
              <th>Image </th>
          </tr>
          <tr>