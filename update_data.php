<?php 
include "db_connect.php"; 

$row = 0;
$loop_count = 0;

if (($file = fopen("interview-test.csv", "r")) !== FALSE) {

    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {

    	$row++;

    	//skip header {first_row}
    	if ($row == 1) {

    		continue;
    	}  

		$country = strtolower($data[0]);
		$year = $data[1];
		$egg = $data[2];
		$milk = $data[3];
		$bread = $data[4];
		$biscuit = $data[5];

		if ($country === '') {

			$country = $temp;
		}
		
		$GLOBALS['temp'] = $country;  #store country in temp...index table



		#insert data to database
		$query = "INSERT INTO $country VALUES ('$year', '$egg', '$milk', '$bread', '$biscuit')";
		$result = mysqli_query($conn, $query);

		
		if ($result) {

			
		}

		else {

			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}

    }


    fclose($file);
}


?>
