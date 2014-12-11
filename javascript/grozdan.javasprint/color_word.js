<style>
  span {
    font-size: 800%;
  }
</style>

<script>
  var s1 = "We are about to start!";
  var a1 = s1.split("");
  //document.write(a1);
  
  for (i = 0; i < s1.length; i++) 
  {
    document.write("<span id=sp" + i 
    + ">" + a1[i] + "</span>");
    document.getElementById("sp" + i).style.color = 
    "rgb(" + 
      Math.floor(Math.random()*256) + "," +  
      Math.floor(Math.random()*256) + "," +
      Math.floor(Math.random()*256) + ")";
  }
</script>
