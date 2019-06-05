
function validimg()
  {
    var x = document.forms["myForm"]["file"].value;
  if (x == "") {
    alert(" image  must be filled out");
    return false;
  }
  }

  function checkEmail(str)
{
    var pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!pattern.test(str))
    alert("Please enter a valid email address");
}


function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if(iKeyCode < 48 || iKeyCode > 57)
            return false;

      
    }   
     function ValidateAlpha(evt)
          {
  var keyCode = (evt.which) ? evt.which : evt.keyCode
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123))
         
        return false;
            
    }




                
                 
  function doClear()   
{   
    
document.getElementById("txtName").value = "";   
}  
  