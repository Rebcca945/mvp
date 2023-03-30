<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
    $user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'testing_database';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM users";
$result = $mysqli->query($sql);
$mysqli->close();   
      


      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      echo '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:pdo_login.php");  
 }  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
		<h1>enventory_management</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>username</th>
				<th>password</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['password'];?></td>
				
			</tr>
			<?php
				}
			?>
		</table>
	</section>    
</body>
</html>

<?php

// Username is root

?>