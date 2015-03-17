<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php>
			$server = "tcp:ts50nv9z1x.database.windows.net,1433";
            $user = "mjl566";
            $pwd = "Cmpt350!";
            $db = "cmpt350a2b";
            try{
                $conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $user, $pwd);
                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                //echo "Connection successfully</br>";
            }
            catch(Exception $e){
                die("Connection failed: ".print_r($e));
            }
			
			 $sql = "CREATE TABLE AddressBook(
				id INT AUTO_INCREMENT PRIMARY KEY,
				firstname VARCHAR(30) NOT NULL,
				lastname VARCHAR(30) NOT NULL,
				company VARCHAR(30),
				phone INT NOT NULL,
				email VARCHAR(255) NOT NULL,
				url VARCHAR(255),
				address VARCHAR(255) NOT NULL,
				birthday DATE,
				add_date DATE NOT NULL,
				note VARCHAR(255)
			)";
			
			if($conn->query($sql) == TRUE)
				echo "Table AddressBook created succefully";
			else
				echo "Error creating table: ".$conn->error;
		?>
	<body>
</html>