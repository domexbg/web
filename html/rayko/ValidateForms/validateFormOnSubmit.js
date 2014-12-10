function validateFormOnSubmit(theForm) {
var reason = "";

  reason += validateUsername(theForm.username);
  reason += validatePassword(theForm.pwd);
  reason += validateEmail(theForm.email);
  reason += validatePhone(theForm.phone);
  reason += validateEmpty(theForm.from);
      
  if (reason != "") {
    alert("Some fields need correction:\n" + reason);
    return false;
  }

  return true;
}
