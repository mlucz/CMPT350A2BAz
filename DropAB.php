<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$server = "tcp:ts50nv9z1x.database.windows.net,1433";
            $user = "mjl566";
            $pwd = "Cmpt350!";
            $db = "cmpt350a2b";
			
            try{
                $conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $user, $pwd);
                $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                echo "Connection successfully</br>";
            }
            catch(Exception $e){
                die("Connection failed: ".print_r($e));
            }
			
			 $sql = "DROP TABLE AddressBook";
			
			
			
			echo "Got this far";
			
			try{
				$result = $conn->query($sql);
				echo "Table dropped";
			}
			
			catch(Exception $e){
				print_r($e);
			}
			
		?>
	<body>
</html>