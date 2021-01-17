function postToGoogle() {
    var field1 = $("#nameField").val();
                var field2 = $("#firstNameField").val();
                var field3 = $("#emailField").val();
            
        
        if(field1 == ""){
          alert('Please Fill Your Name');
          document.getElementById("nameField").focus();
          return false;
        }
        if(field2 == ""){
          alert('Please Fill Your Email');
          document.getElementById("firstNameField").focus();
          return false;
        }
        if(field3 == ""){
          alert('Please Fill Your Mobile Number');
          document.getElementById("emailField").focus();
          return false;
        }
  
                $.ajax({
                    url: "https://docs.google.com/forms/d/1MZt4S4FBM3qeD6xm34bFC_quOpaYljs-oYsu74TyH2Q/formResponse?",
                data: {"entry.1385748098": field1, "entry.1306558735": field2, "entry.281956786": field3},
        type: "POST",
        dataType: "xml",
        success: function(d)
{
},
error: function(x, y, z)
{

var form = document.getElementById("form");
var msg = document.getElementById("thxTexte");
form.style.display = 'none';
msg.style.display = 'flex'; 
$('#form').get(0).reset();
  
}
    });
return false;
}