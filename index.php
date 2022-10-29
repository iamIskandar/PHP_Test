<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>

  	<?php 
  		include 'db_connect.php';
  		include 'update_data.php';

  		$sql = "SELECT * FROM malaysia";
  		$result = mysqli_query($conn, $sql);

  		$sql_2 = "SELECT * FROM singapore";
  		$result_2 = mysqli_query($conn, $sql_2);

  		$sql_3 = "SELECT * FROM thailand";
  		$result_3 = mysqli_query($conn, $sql_3);
  	 ?>


  <body>
  	<div class="container  pt-5">
  		<h4>table-data</h4>
  		<div class="row-6 datatable table table-striped table-md table-responsive-md">
  			<table class="table ">
  				<thead>
  					<tr>
  						<th scope="col">Item</th>
  						<th scope="col">Year</th>
  						<th scope="col">Egg</th>
  						<th scope="col">Milk</th>
  						<th scope="col">Bread</th>
  						<th scope="col">Biscuit</th>
  						<th scope="col">Country</th>
  					</tr>
  				</thead>

  				<tbody>
  					<?php 
  						$count = 1;
  						while($row = mysqli_fetch_array($result)) {
  							echo "<tr>";
  								echo "<td>".$count."</td>";
  								echo "<td>".$row['Year']."</td>";
  								echo "<td>".$row['Egg']."</td>";
  								echo "<td>".$row['Milk']."</td>";
  								echo "<td>".$row['Bread']."</td>";
  								echo "<td>".$row['Biscuit']."</td>";
  								echo "<td>Malaysia</td></tr>";
  								$count = $count + 1;
  						}

  						while($row = mysqli_fetch_array($result_2)) {
  							echo "<tr>";
  								echo "<td>".$count."</td>";
  								echo "<td>".$row['Year']."</td>";
  								echo "<td>".$row['Egg']."</td>";
  								echo "<td>".$row['Milk']."</td>";
  								echo "<td>".$row['Bread']."</td>";
  								echo "<td>".$row['Biscuit']."</td>";
  								echo "<td>Singapore</td></tr>";
  								$count = $count + 1;
  						}

  						while($row = mysqli_fetch_array($result_3)) {
  							echo "<tr>";
  								echo "<td>".$count."</td>";
  								echo "<td>".$row['Year']."</td>";
  								echo "<td>".$row['Egg']."</td>";
  								echo "<td>".$row['Milk']."</td>";
  								echo "<td>".$row['Bread']."</td>";
  								echo "<td>".$row['Biscuit']."</td>";
  								echo "<td>Thailand</td></tr>";
  								$count = $count + 1;
  						}
              
  					 ?>
  				</tbody>
  			</table>
  		</div>
  	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 </body>
</html>