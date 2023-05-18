<!DOCTYPE html>
<html>
<head>
	<title>crud user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>

<section id="aboutus">
  <div class="container" style="height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10px;">
    <div class="row">
      <div class="col-sm-8">
        <h2 style="text-align: center; margin-left: -40px; font-family: sans-serif;">Llogaria ime</h2>
        <hr>
        <ul class="list-group" style="margin-top: 40px; margin-left: 50px; width: 500px;">
  <li 
  class="list-group-item"><span style="color: grey;">Emri: </span> Jon <button class="btn"><i class="fa fa-edit"></i> edit</button>
</li> 
  <li 
  class="list-group-item"><span style="color: grey;">Mbiemri: </span> Fetahu <button class="btn2"><i class="fa fa-edit"></i> edit</button>
</li>
  <li
   class="list-group-item"><span style="color: grey;">Email: </span> jon@gmail.com <button class="btn3"><i class="fa fa-edit"></i> edit</button>
</li>
  <li class="list-group-item"><form onsubmit="return myfun()">
<span style="color: grey;">Change Password </span><input type="password" id="passwords" value="">
<span id="messages" style="color: red;"> </span><br><br>
<span style="color: grey;">Confirm Password </span><input type="password" id="passwordss" value="">
<span id="messagess"> </span><br><br>
<button class="btn6"><i class="fa fa-confirm"></i> Confirm</button>
  <li 
  class="list-group-item"><span style="color: grey;">Ditelindja: </span>28.09.2002 <button class="btn4"><i class="fa fa-edit"></i> edit</button>
</li>
  <li 
  class="list-group-item"><span style="color: grey;">Adresa: </span>Drenas <button class="btn5"><i class="fa fa-edit"></i> edit</button>
</li>
</ul>
      </div>
      <div class="col-sm-4">
        <div class="img-wrap">
          <img src="profili.png">
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  function myfun(){
    var a = document.getElementById("passwords").value;
    var b = document.getElementById("passwordss").value;

    if(a==""){
      document.getElementById("messages").innerHTML="Please write the Password";
      return false;
    }

    if(a.length < 5){
      document.getElementById("messages").innerHTML="Password must be more than 5 characters";
      return false;
    }
    if(a.length > 25){
      document.getElementById("messages").innerHTML="Password must be less than 25 characters";
      return false;
    }
    if(a!=b){
      document.getElementById("messages").innerHTML="Password does not match.";
      return false;
    }
  }
</script>

</body>
</html>


<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 300px;
}
.btn2 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 250px;
}

.btn3 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 370px;
}
.btn4 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 330px;
}
.btn5 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 330px;
}
.btn6 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 360px;
  margin-bottom: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>

