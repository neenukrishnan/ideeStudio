function validateForm()
{
      
   var name=document.form1.fname;
   var secname=document.form1.lname;
  
   var email=document.form1.mail;
   var message=document.form1.message;

   
   var nameTest = name.value.search(/^[a-z][a-z\s]*$/);
   if (nameTest == -1||name == ""){
         alert("Please enter only letters in this field.");
   }
  
}
