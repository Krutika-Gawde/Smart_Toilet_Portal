<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js" ></script>
		
		<!--<link rel="stylesheet" href="stylenew11.css" >
		<link rel="stylesheet" href="css/custom-stylenew11.css">-->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script type="text/javascript">


		$(function(){
			$("#from").datepicker();
		});
		$(function(){
			$("#to").datepicker();
		});





	</script>
	
	<style>
* {
   margin:0;
				padding:0;
				font-family:"montserrat",sans-serif;
				box-sizing:border-box;

}

body {
  margin: 0;
}
.column {
	background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(aurorab.jpg);

				background-size:cover;
				background-position:center;
				background-attachment: fixed;
				
  float: left;
  width: 50%;
  padding-top: 50px;
  padding-bottom: 50px;
  padding-left: 15px;
  color:white;
}


/* Clear floats after the columns*/ 
.row:after {
	background-color: #B0C4DE;
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>
<style>
		
	
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: 800000;}
tr:nth-child(even) {background-color: 2F4F4F;}
tr:nth-child(odd) {background-color: 000000;}


th {
  background-color:#FFDEAD;;
  color: black;
}

</style>

	<body>

		<div class="row">
  <div class="column">
   

<h3  style="text-align: center;font-weight:bold;">FETCH YOUR DATA</h3>

	<form action="25dec.php" method="post">
	
	<b><label class=" col-sm-4  control-label">FROM</label></b>
	<div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4"></div>
	<input type="text" name="from_date" id="from" class="form-control" >
	

	<b><label class="col-sm-4 control-label">TO</label></b>
	<div class="col-lg-4 col-sm-4 col-xs-12 col-md-offset-4"></div>
	<input type="text" name="to_date" id="to" class="form-control" >


	<b><label class="col-sm-4 control-label">AREA</label></b>
	<div class="col-lg-4"></div>
	<select name="area" class="form-control" >
		<option>SELECT</option>
		<option value="VIKHROLI">VIKHROLI</option>
		<option value="THANE">THANE</option>
		<option value="AIROLI">AIROLI</option>
	</select>





	<b>	<label class="col-sm-4 control-label">TOILET_ID</label></b>
	<div class="col-lg-4"></div>
	<select name="toilet" class="form-control" >
		<option>SELECT</option>
		<option value="TOILET-1">TOILET-1</option>
		<option value="TOILET-2">TOILET-2</option>
		<option value="TOILET-3">TOILET-3</option>
	</select>




	<b><label class="col-sm-4 control-label" >COMPARTMENT</label></b>
	<div class="col-lg-4"></div>
	<select name="compartment" class="form-control">
		<option>SELECT</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>



	<label class="col-sm-4 control-label"></label>
	<div class="col-lg-4"></div>
	<input type="submit" name="submit" class="btn btn-primary">

</form>
<br>
<br>
<br>

		
<div class=button>
<button type="button" onclick="window.location.href='index1.php'" style=" font-size: 20px; padding: 14px 40px; border-radius: 12px; background-color: #1c87c9;
  color:#fff;display:inline-block;cursor:pointer;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); width: 50%;">FOR BULK INFORMATION CLICK HERE!!!</button>
</div>
</div>




  <div class="column">
    <table  >
		
			<tr>
				<th colspan=7><h2  style="text-align: center; font-weight:bold;" >DATA</h2></th>

				</tr>
				<t>
				<th><b>AREA</b></th>
				<th><b>DATE</b></th>
				 <th><b>WATER</b></th>
				<th><b>AIR QUALITY</b></th>
				<th><b>DIRT</b></th>
				<th><b>TOILET ID</b></th>
				<th><b>COMPARTMENT</b></th>
				

			</t>
			<tbody>
	<?php 
	$server="localhost";
$user="root";
$pass="";
$dbname="try";
$conn=mysqli_connect($server,$user,$pass,$dbname);

if(isset($_POST['submit'])){
	
		$AREA=$_POST['area'];
		$FDATE=$_POST['from_date'];
		$F1DATE=strtotime($FDATE);
		$F1DATE=date("Y/m/d",$F1DATE);
		$TDATE=$_POST['to_date'];
		$T1DATE=strtotime($TDATE);
		$T1DATE=date("Y/m/d",$T1DATE);
		$TOILET_ID=$_POST['toilet'];
		$COMPARTMENT=$_POST['compartment'];
		 
		
		if( $AREA!="" AND $F1DATE!="" AND $T1DATE!="" AND $TOILET_ID!="" AND $COMPARTMENT!="")
	{
		
			






			 $query=("SELECT * FROM single WHERE( AREA='$AREA' AND  DATES>='$F1DATE'   AND  DATES<='$T1DATE' AND TOILET_ID='$TOILET_ID' AND COMPARTMENT='$COMPARTMENT' )");
			$result=mysqli_query($conn,$query);
			$query1=("SELECT SUM(COUNT)AS COUNT FROM single where(AREA='$AREA' AND DATES>='$F1DATE' AND  DATES<='$T1DATE'  AND TOILET_ID='$TOILET_ID' AND COMPARTMENT='$COMPARTMENT')");
        	$result2=mysqli_query($conn,$query1);
       		 $row1=mysqli_fetch_assoc($result2);
        	// $json1 = json_encode($row1); 
       		 $data1 = $row1;

			
       		 //echo json_encode(array($data1));
			
			//if(mysqli_num_rows($result)>0){
			
				while($row=mysqli_fetch_assoc($result)){
				{switch($row['DIRT']){
					case $row['DIRT']=="NO";
						$d="EXCELLENT";
					break;
					case $row['DIRT']=="YES";
						$d="BAD";
					break;
				//	case $row['DIRT']<75;
				//		$d="BAD";
				//	break;
				//	case $row['DIRT']<100;
				//		$d="WORSE";
				//	break;
					 default:
					 $d="OKAY";
        
}


					switch($row['WATER']){
					case $row['WATER']=="NO";
						$w="BAD";
					break;
					case $row['WATER']=="YES";
						$w="EXCELLENT";
					break;
					//case $row['WATER']<75;
					//	$w="GOOD";
					//break;
					//case $row['WATER']<100;
					//	$w="EXCELLENT";
					//break;
					 default:
					 $w="OKAY";
}


					switch($row['AIR_QUALITY']){
					case $row['AIR_QUALITY']<25;
						$a="EXCELLENT";
					break;
					case $row['AIR_QUALITY']<50;
						$a="GOOD";
					break;
					case $row['AIR_QUALITY']<75;
						$a="BAD";
					break;
					case $row['AIR_QUALITY']<100;
						$a="WORST";
					break;
					 default:
					 $a="OKAY";

}

				}


					
			
					?>
					
					<tr>

						
						<td><?= $row['AREA'];?></td>
						<td><?= $row['DATES'];?></td>
						<td><?= $w;?></td>
						<td><?= $a;?></td>
						<td><?= $d;?></td>
						<td><?= $row['TOILET_ID'];?></td>
						<td><?= $row['COMPARTMENT'];?></td>
						
						
					</td>
					</tr>

					<?php
				}
			 
				?>
				<h3>Number of Individuals who have used the toilet till now = <?php echo $data1['COUNT']; ?></h3>
				<?php
			}
		}
	?>
	

</tbody>
</table>
		
	
  </div>
</div>
		
</body>
</html>
