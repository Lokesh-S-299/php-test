<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>

<br>
<br>
<br>

<?php 
include 'connect.php';
?>

<div class="container">
  <form action="processinsert.php" method="POST">
  <div class="row align-items-center">
    <div class="col">

        <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input class="form-control form-control-lg" type="Name" class="form-control" id="Name" name="Name" placeholder="Name">
        </div>
        </div>


        <div class="form-group row">
        <label for="inputPhone" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
        <input class="form-control form-control-lg" type="Phone" class="form-control" id="Phone" name="Phone" placeholder="Phone">
        </div>
        </div>

        <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input class="form-control form-control-lg" type="Email" class="form-control" id="Email" name="Email" placeholder="Email">
        </div>
        </div>




    </div>
  </div>
  <button type="submit" class="btn btn-primary id="select" name="Details">Submit</button>
  </form>
</div>


</body>
</html>