//funkcia koiato proveriava validnostta na id="MYname"
//funkcia koiato vrashta true pri validni danni i vrrashta false pri nevalidni danni
function validateName(){
  var MName =document.getElementById("MYname").value;
  document.getElementById("MYname").setAttribute("class", "");
  
  if (MName.length<3)
  {
    document.getElementById("MYname").setAttribute("class", "error");
  
    alert("Must contain min 3 letters");
    return false;
  }
  
  return true;
}

function validateMail(){
  var MMail = document.getElementById("mail").value;
  document.getElementById("mail").setAttribute("class","");
  var n = MMail.search(/[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+/i);
if (n!==0){
   document.getElementById("mail").setAttribute("class", "error");
   alert("Must contain numbers, letters, @, dots and dash");
   return false;
}
  
  return true;
}
//Malki, Glavni bukvi, cifri, dolna cherta do 8 simvola
function validateUser(){
  var MUser = document.getElementById("username").value;
  document.getElementById("username").setAttribute("class","");
  var u=MUser.search(/[a-zA-Z0-9_]{3,8}/i);
 
  if (u!==0){
     document.getElementById("username").setAttribute("class", "error");
     alert("Must contain numbers, letters, dash");
     return false;
  }
  
  return true;
}

function myFunction() {
  var valName=validateName();
  if (valName===false)
    {
      return;
    }
  
  var valMail=validateMail();
  if (valMail===false)
    {
      return;
    }
  
  var valUser=validateUser();
  if(valUser===false){
    return;
  }
}  
