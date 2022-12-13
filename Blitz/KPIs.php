<?php
require "functions.php";
$mysqli = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleforkpipage.css">
    <script src="https://kit.fontawesome.com/21e5980a06.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<div class="logo">
			<img src="blitzw.png" alt="logo" />
		</div>
		<ul>
			<li><a href="KPI_home.php"></i>Home</a></li>    
			<li><a href="About.php">About</a></li>    
			<li><a href="help.php">Help</a></li>    
			<li><a href=""><i class="fa fa-bell" aria-hidden="true"></i></a></li>    
			<li><a href=""><i class="fa-sharp fa-solid fa-user-tie"></i></a></li>    
		</ul>

	</nav>
	<br></br>

	<div class="sidebar">
		<a href="#"><i class="fa-solid fa-file-invoice"></i><span>KPI Dashboard</span></a>
		<a class="active" href="KPIs.php"><i class="fa-solid fa-file-circle-plus"></i><span>KPIs</span></a>
		<center>
			<img src="profile.png">
		</center>
		<br>
		<div class="name1">
		 Username : EM001
		</div>
	

		<br>
		<br> 
		<div class="logout">	
		<a href="landingpage.php"><button type="submit" id="btn">Logout<i class="fa-solid fa-right-from-bracket"></i></button></a></br>
	</div>
	</div>
	<center>
			<div class= "button">
				<a href="customkpi.php"><i class="fa-regular fa-square-plus"></i> Add a Custom KPI</a>
			</div>
			<ul>
				<li><span><a href="Quoterate.php">QUOTE RATE</a></span>
				<div class="icon"><a href=update.php><i class="fa-solid fa-pen-to-square"></i></a><a href=update.php><i class="fa-solid fa-trash-can"></i></a></div></li>   
				<li><span><a href="Quotaattainment.php">QUOTA ATTAINMENT</a></span>
				<i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></li>    
				<li><span><a href="Contractrate.php">CONTRACT RATE</a></span>
				<i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></li>
				<li><span><a href="Noofreferrals.php">NO. OF REFERRALS</a></span>
				<i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></li>
				<li><span><a href="Bindrate.php">BIND RATE</a></span>
				<i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></li>
				<li><span><a href="Percentagepending.php">PERCENTAGE PENDING</a></span>
				<i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></li>
	<?php 
		$qry = "select * from kpi";
		$result = mysqli_query($mysqli,$qry);
		if($result){
			while($row = mysqli_fetch_assoc($result)){
				$id = $row ['id'];
				$name= $row['name'];
				echo "<li><span><a href='Addedkpi.php?id=$id'>".$name.'</a></span>
				<div class="icon"><a href=update.php><i class="fa-solid fa-pen-to-square"></i></a><a href=update.php><i class="fa-solid fa-trash-can"></i></a></div></li>';
			}
		}	
		else{
			echo "Error: " . $qry . "<br>" . mysqli_error($mysqli);
		}	
	?>
			</ul>		
	</center>
</body>