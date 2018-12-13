<?php require_once "head.php" ?>
<?php require_once "db_connection.php" ?>


<?php 
	$session_id = session_id();
?>

<hr>
<h2>Pytanie 1</h2>
<?php 

		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM pyt_1 WHERE session_id = '$session_id'" ;
		$get_all_data = $conn->prepare($sql);
		$get_all_data -> execute(array($sql));
		$all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
		$pyt_1 = $all_row;

			foreach ($pyt_1 as $all) {
					echo  $all . ' | ' ;
			}

		$conn = null;

?>
	<hr>
<h2>Pytanie 2</h2>
<?php 
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM pyt_2 WHERE `pyt_2`.`session_id` = '$session_id'" ;
 		$get_all_data = $conn->prepare($sql);
 		$get_all_data -> execute(array($sql));
 		$all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
      	$pyt_2 = $all_row;
	 
		foreach ($pyt_2 as $all) {
				echo  $all . ' | ' ;
		}
		$conn = null	
?>

<hr>
<h2>Pytanie 3</h2>

<hr>
<h2>Pytanie 4.1</h2>

<?php 
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM pyt_4_1 WHERE `pyt_4_1`.`session_id` = '$session_id';" ;
 		$get_all_data = $conn->prepare($sql);
 		$get_all_data -> execute(array($sql));
 		$all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
      	$pyt_4_1 = $all_row;
		foreach ($pyt_4_1 as $all) {
					echo  $all . ' | ' ;
		}

		$conn = null					 
?>
<hr>
<h2>Pytanie 4.2</h2>
<?php 
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );	
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM pyt_4_2 WHERE `pyt_4_2`.`session_id` = '$session_id';" ;
 		$get_all_data = $conn->prepare($sql);
 		$get_all_data -> execute(array($sql));
 		$all_row = $get_all_data->fetch(PDO::FETCH_ASSOC); 
      	$pyt_4_2 = $all_row;
		foreach ($pyt_4_2 as $all) {
					echo  $all . ' | ' ;
		}

		$conn = null					 
?>



	


   
				