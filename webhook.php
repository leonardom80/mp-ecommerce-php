<?php
 //ini_set('display_errors',1);
 //error_reporting(E_ALL);
            $servername = "ec2-18-209-98-235.compute-1.amazonaws.com";
            $username = "amolina";
            $password = "Master8098+";
            $dbname = "tienda";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
            
	$data_json = json_decode(file_get_contents('php://input'), true);		
    $datos = json_encode($data_json , JSON_UNESCAPED_SLASHES );

			// Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO datos(json)VALUES ('".$datos."')";

            if (mysqli_query($conn, $sql)) {
               echo "Registro ingresado correctamente";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();

?>
