<?php ?>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>







</head>
<body>

<h1>Details</h1>
<hr>

<br>
<br>
<br>


  	<br>
  	<h1>To insert</h1>
  	  <button  id="myButton1" class="float-left submit-button">Insert</button>
  	  <script type="text/javascript">
    document.getElementById("myButton1").onclick = function () {
        location.href = "http://localhost/insert.php";
    };
</script>
  	<br>
  	<br>
  	<h1>To select</h1>
  	  <button  id="myButton2" class="float-left submit-button" >Select</button>
  	  <script type="text/javascript">
    document.getElementById("myButton2").onclick = function () {
        location.href = "http://localhost/select.php";
    };
</script>
  	<br>
  	<br>

  	<h1>To delete</h1>
  	  <button  id="myButton3" class="float-left submit-button" >Delete</button>
  	  <script type="text/javascript">
    document.getElementById("myButton3").onclick = function () {
        location.href = "http://localhost/delete.php";
    };
</script>
  	  <br>


</body>