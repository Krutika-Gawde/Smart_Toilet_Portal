<!DOCTYPE html>
<html>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js" ></script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
$server="localhost";
$user="root";
$pass="";
$dbname="workers";
$conn=mysqli_connect($server,$user,$pass,$dbname);


error_reporting(0);
$userName=$_POST['workerName'];
$userId=$_POST['workerId'];
$userContact=$_POST['contact'];
$userArea=$_POST['area'];
$userToilet=$_POST['toilet'];
$userRfid=$_POST['rfid'];
if(!$_POST['submit']){
	echo"";
}
else{
	$sql="INSERT into register(NAME,CONTACT,AREA_ASSIGNED,TOILET_ID,WORKER_ID,RFID)
	values('$userName','$userContact','$userArea','$userToilet','$userId','$userRfid')";
	if (mysqli_query($conn,$sql)){
		echo"Data creation successful";
	}
	else{
		echo"Something went wrong, try later";
	}
}?>
<head>
<title> Workers Registration </title>
</head>

<style>
* {

  margin:0;
				padding:0;
				font-family:"montserrat",sans-serif;
				box-sizing:border-box;

}

.column {
	background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(yellow.jpg);

				background-size:cover;
				background-position:center;
				background-attachment: fixed;
				
				
  float: center;
  width: 100%;
  padding-top: 100px;
  padding-bottom: 100px;
  justify-content: center;
  display:flex;
				align-items: center;
				color:white;
}

/* Clear floats after the columns*/ 
.row:after {
	background-color: lightyellow:;
  content: "";
  display: table;
  clear: both;
}
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>
<body>
	<div class="row">
  <div class="column">
<form action="loginworker.php"method="POST">

<b><label class=" col-sm-4  control-label">NAME</label></b>
	<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4"></div>
	<input type="text" name="workerName"  class="form-control" required>


	<b><label class=" col-sm-4  control-label">WORKER-ID</label></b>
	
	<input type="text" name="workerId"  class="form-control" required>

	<b><label class=" col-sm-4  control-label">RFID-NO</label></b>
	
	<input type="text" name="rfid"  class="form-control" required>



	<b><label class=" col-sm-4  control-label">CONTACT</label></b>
	
	<input type="text" name="contact"  class="form-control" required>


	<b><label class="col-sm-4 control-label">AREA</label></b>
	<div class="col-lg-4"></div>
	<select name="area" class="form-control" >
		<option>SELECT</option>
		<option value="VIKHROLI">VIKHROLI</option>
		<option value="THANE">THANE</option>
		<option value="AIROLI">AIROLI</option>
	</select>





	<b>	<label class="col-sm-4 control-label">TOILET-ID</label></b>
	<div class="col-lg-4"></div>
	<select name="toilet" class="form-control" >
		<option>SELECT</option>
		<option value="TOILET-1">TOILET-1</option>
		<option value="TOILET-2">TOILET-2</option>
		<option value="TOILET-3">TOILET-3</option>
	</select>


<label class="col-sm-4 control-label"></label>
	<div class="col-lg-4"></div>
<input type="submit" name="submit"  value="Create" class="btn btn-primary">
</form>

</div>
</div>

</body>
</html>

