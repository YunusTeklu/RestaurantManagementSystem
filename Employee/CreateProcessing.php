<?php  
	include("../Shared/db_open_connection.php");
?>
<?php
	if(isset($_POST['submit'])){

		//Retriev values from forms
		$fi_name =$_POST["first_name"];
		$fa_name =$_POST["fathers_name"];
		$gr_fa_name =$_POST["grand_fathers_name"];
		$pos =$_POST["position"];

		//Assemble Query
		$query ="INSERT INTO employee (";
		$query .= " first_name, fathers_name, grand_fathers_name, position";
		$query.= " ) VALUES (";
		$query.= " '{$fi_name}', '{$fa_name}', '{$gr_fa_name}', '{$pos}'";
		$query.=" )";

		//Send the query to the database
		$result= mysqli_query($connection, $query);

		if($result){
			header("Location: List.php");
			exit;
			//echo "<h2>Record entry Successful!</h2> ";
		}else{
			header("Location: Create.php");
			exit;
			//echo "<h2>Record entry Unsuccessful!</h2> ";
			die("Database query failed" . mysqli_error($connection));
		}

	}else{
		/*ob_start();
		header("Location: Create.php");
		exit;
		die("Database query failed" . mysqli_error($connection));
		ob_end_flush();*/
		echo "<h2>Submission Failed!</h2>";
	}
	
?>
<?php  
	include("../Shared/db_close_connection.php");
?>