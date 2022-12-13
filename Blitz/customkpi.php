<?php 
	require "functions.php";
	$mysqli = connect();
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$variable_1 = $_POST['variable_1'];
		$variable_2 = $_POST['variable_2'];
		$formula = $_POST['formula'];

		$qry = "insert into kpi values(null,'$name','$variable_1', '$variable_2', '$formula')";
		if(mysqli_query($mysqli,$qry)){
			header('location:KPIs.php');
		}
		else{
			echo mysqli_error($mysqli);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleforcustom.css">
    <script src="https://kit.fontawesome.com/21e5980a06.js" crossorigin="anonymous"></script>
	<title>Custom KPI</title>
</head>
<body>
	<div class="header">
        <img src="blitzi.png" alt="logo" />
    </div>
    <div class="main">
		<form action="" class="box" method="post" autocomplete="off">	
		<h1><i class="fa-regular fa-square-plus"></i> Custom KPI</h1>
				<div class="KPIname">
                    <label><b>KPI Name</b></label>
					<input type="text" name="name" id="name" value="<?php echo @$_POST['name']; ?>">
				</div>

				<div class="Indicator1">
                    <label><b>Indicator 1</b></label>
					<input type="text" name="variable_1" id="variable_1" value="<?php echo @$_POST['variable_1']; ?>">
				</div>

				<div class="Indicator2">
                    <label><b>Indicator 2</b></label>
					<input type="text" name="variable_2" id="variable_2" value="<?php echo @$_POST['variable_2']; ?>">
				</div>
			
                <div class="Formula">
                    <label><b>Formula</b></label>
					<input type="text" name="formula" id="formula" value="<?php echo @$_POST['formula']; ?>">
				</div>

            <div class="inline-block">
            <div class="bar">
                <button class="inner1" type="submit" name="submit"><b>Save</b></button>
                <button class="inner2" type="submit" name="submit1"><b>Cancel</b></button>
            </div>
        	</div>

		</form>
	</div>
</body>
</html>