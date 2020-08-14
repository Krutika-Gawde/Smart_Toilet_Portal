





<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js" ></script>
		<!--<link rel="stylesheet" href="stylenew11.css" >
		<link rel="stylesheet" href="css/custom-stylenew11.css">-->
		<link rel="stylesheet" href="stylenew11.css"  type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	

	</head>
	<style>
		* {

 				 margin:0;
				padding:0;
				font-family:"montserrat",sans-serif;
				box-sizing:border-box;}


		.container{
			background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(aurorab.jpg);

				background-size:cover;
				background-position:center;
				background-attachment: fixed;
				
  float: center;
  width: 100%;
  padding-top: 150px;
  padding-bottom: 150px;
  justify-content: center;
  display:flex;
				align-items: center;
				color:white;
  
}


	</style>
	<body>
		<div class="container-fluid padding">
			<div class="row welcome text-center">
					<div class="col-12" style="background-color:  powderblue;">
							<h1 class ="display-4"><b>WELCOME</b></h1>
						</div>
					</div>
				</div>
			<!--<div class="container-fluid">
			<div class="jumbotron big-banner " style="height:500px;padding-top:150px;">-->
				<!--<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">-->
					<div class="container">
						<div class="row">
						<div class="col-md-12 col-sm-4 col-xs-12 col-md-offset-8" >
<form action="tryseparate.php" method="post">
<div class="panel panel-success">
	<div class="panel heading">
		<h2>LOGIN</h2>
	</div>
</br>
</br>
	<div class="panel body">
		<div class="form-group">
			<label>USERNAME</label>
			<input type="text"  name="txtUser" class="form-control">
		</div>
		<div class="form-group">
			<label>PASSWORD</label>
			<input type="password"  name="txtPass" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit"  name="btnSubmit" class="form-control btn btn-success">

		</div>
	</div>
</div>
</form>



<!--<button type="button" class="btn btn-success">NEXT
				<a href="dateseparate.html" class="btn btn-success"></a>
			</button>-->

</div>
</div>
</div>
</div>
</div>
<?php
$conn=mysqli_connect("localhost","root","","login");
if(isset($_POST['btnSubmit']))
{
	$txtUser=$_POST['txtUser'];
	$txtPass=$_POST['txtPass'];
$query="select * from users where username='{$txtUser}' and password='{$txtPass}'";
	$result=mysqli_query($conn,$query);
	if($res=mysqli_fetch_array($result))
	{
		echo"<script>alert(\"Login Successful\");</script>";
		header("location:25dec.php");

	}
	else
	{
		echo"<script>alert(\"Login Failed\");</script>";
	}
}
?>


		</body>
</html>
