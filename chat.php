<?php  include('server.php'); ?>

<?php include('chorwacja.php'); ?>

<br /> <br />
<div class="card horizontal-center pagination-centered bg-warning col-lg-offset-4" id="inner2" >
  <div class="card-header">
    <form name="form1" class="col-lg-offset-4">
      Twoja nazwa: <input type="text" class="form-control" name="uname"/><br />
      Wiadomość: <br />
      <textarea name="msg" class="form-control"></textarea><br />
      <button class="nav-link btn btn-outline-dark"><a href="#" onclick="submitChat()">WYŚLIJ</a></button><br /> <br 
    </div>
    <div class="card-body float-right" id="chatlogs">
     
      Ładowanie...

    </div>

  </div></form></div>

  


</body>

<script>

  function submitChat() {
   if (form1.uname.value == '' || form1.msg.value == '')
   {
    alert('Wypełnij wszystkie pola');
    return;
  }
  var uname = form1.uname.value;
  var msg = form1.msg.value;
  var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200)
    {
     var chatlogs = document.getElementById("chatlogs");
     chatlogs.innerHTML = xmlhttp.responseText;
   }
 }

 xmlhttp.open('GET', 'insert.php?uname='+uname+'&msg='+msg, true);
 xmlhttp.send();
}

$(document).ready(function (e) {
  setInterval(function () {
   


    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function(){
     if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
      document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;}
      
    }
    xmlhttp.open('GET','logs.php', true);
    xmlhttp.send();
    
  }, 2000);
});</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>









</html>