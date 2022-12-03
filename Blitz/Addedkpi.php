<?php
require "functions.php";
$mysqli = connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h2>KPI Details</h2>
    <table style="width: 80%" border="1">
    <tr>
        <th>S#</th>
        <th>KPI Name</th>
        <th>Indicator 1</th>
        <th>Indicator 2</th>
        <th>Formula</th>
    </tr>

    <?php 
    $qry = "select * from kpi";
    if(mysqli_query($mysqli,$qry)){
        $row = mysqli_fetch_assoc(mysqli_query($mysqli,$qry));
        echo $row['name'];
    }
    else{
        echo mysqli_error($mysqli);
    }
    $run = $mysqli -> query($qry);
    if($run -> num_rows > 0){
        while($row = $run -> fetch_assoc());}
?>

    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['kpi_name']; ?></td>
        <td><?php echo $row['kpi_variable_1']; ?></td>
        <td><?php echo $row['kpi_variable_2']; ?></td>
        <td><?php echo $row['kpi_formula']; ?></td>     
    </tr>

</table>