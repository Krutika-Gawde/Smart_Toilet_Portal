<!DOCTYPE html>
<html>
<head>
	<title>Filters in php</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="js/jquery-3.4.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js" ></script>
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
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
  box-sizing: border-box;
}

body {
  margin: 0;
}
.column {
	background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(aurorab.jpg);

				background-size:cover;
				background-position:center;
				background-attachment: fixed;
				
  width: 50%;
   padding-top: 175px;
  padding-bottom: 175px;
  padding-left: 15px;
  color:white;

/* Clear floats after the columns*/ 
.row:after {
  content: "";
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

tr:hover {background-color: #FFFAFA;}
tr:nth-child(even) {background-color:  2F4F4F;}
tr:nth-child(odd) {background-color: 000000;}


th {
  background-color:#FFDEAD;;
  color: black;
}
	</style>

</head>
<body>
	<div class="row">
  <div class="column">
<h3 style="text-align: center;font-weight:bold;">FETCH YOUR DATA</h3>

	<form action="index1.php" method="post">


		
	<b><label class="col-lg-2 control-label">FROM</label></b>
	<div class="col-lg-4"></div>
	<input type="text" name="from_date" id="from" class="form-control" >



	
	<b><label class="col-lg-2 control-label">TO</label></b>
	<div class="col-lg-4"></div>
	<input type="text" name="to_date" id="to" class="form-control" >
	


		
	<b><label class="col-lg-2 control-label">AREA</label></b>
	<div class="col-lg-4"></div>
	<select name="area" class="form-control" >
		<option>SELECT</option>
		<option value="VIKHROLI">VIKHROLI</option>
		<option value="THANE">THANE</option>
		<option value="AIROLI">AIROLI</option>
	</select>






	<label class="col-lg-2 control-label"></label>
	<div class="col-lg-4"></div>
	<input type="submit" name="submit1" class="btn btn-primary">

	
</div>


	






			


  <div class="column">
	<table >
		
			<tr>
				<th colspan=7><h2  style="text-align: center; font-weight:bold;">DATA</h2></th>

				</tr>
				<t>
				<th>AREA</th>
				<th>DATE</th>
				<th>WATER</th>
				<th>AIR QUALITY</th>
				<th>DIRT</th>
				<th>TOILET ID</th>
				<th>COMPARTMENT</th>
				
				

			</t>
		
	
<tbody>

	<?php 
	$server="localhost";
$user="root";
$pass="";
$dbname="try";
$conn=mysqli_connect($server,$user,$pass,$dbname);

if(isset($_POST['submit1'])){
	
		$AREA=$_POST['area'];
		$FDATE=$_POST['from_date'];
		$F1DATE=strtotime($FDATE);
		$F1DATE=date("Y/m/d",$F1DATE);
		$TDATE=$_POST['to_date'];
		$T1DATE=strtotime($TDATE);
		$T1DATE=date("Y/m/d",$T1DATE);
		//$TOILET_ID=$_POST['toilet'];
		//$COMPARTMENT=$_POST['compartment'];
		 
		
		if( $AREA!="" AND $F1DATE!="" AND $T1DATE!=""  )
	{
			 $query=("SELECT * FROM single WHERE( AREA='$AREA' AND  DATES>='$F1DATE'   AND  DATES<='$T1DATE' )");
			
			$result=mysqli_query($conn,$query);

			$query2=("SELECT SUM(COUNT)AS COUNT FROM single where(AREA='$AREA' AND DATES>='$F1DATE' AND  DATES<='$T1DATE')");
        	$result3=mysqli_query($conn,$query2);
       		 $row2=mysqli_fetch_assoc($result3);
        	// $json1 = json_encode($row1); 
       		 $data2 = $row2;
			
			//if(mysqli_num_rows($result)>0){
			
				while($row=mysqli_fetch_assoc($result)){
				

					
			
					?>
					<tr>

						
						<td><?= $row['AREA'];?></td>
						<td><?= $row['DATES'];?></td>
						<td><?= $row['WATER'];?></td>
						<td><?= $row['AIR_QUALITY'];?></td>
						<td><?= $row['DIRT'];?></td>
						<td><?= $row['TOILET_ID'];?></td>
						
						<td><?= $row['COMPARTMENT'];?></td>
						
						
					</td>
					</tr>
					<?php
				}
			
		
				?>
				<h3>Number of Individuals who have used the toilet till now = <?php echo $data2['COUNT'] ?></h3>
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

