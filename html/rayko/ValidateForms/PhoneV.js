function phonenumber(inputtxt)
//*Format time: +xx-xxxx-xxxx;+XX.XXXX.XXXX;+XX XXXX XXXX*//
{
  var phoneno = /^\+?([0-9]{1,3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  if((inputtxt.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("message");
        return false;
        }
}

