<?php  
	include("../Shared/Header.php");
	include("../Shared/db_open_connection.php");
?>
<div class=" mid container">
	<h1>Employee Information</h1>
	<?php
		$emp_id=$_GET["id"];

		//Links
		$edit_link= "</br><a class='btn btn-dark' href='Edit.php?id={$emp_id}'>Edit</a> ";
		$delete_link= "<a class='btn btn-dark' href='Delete.php?id={$emp_id}'>Delete</a></br></br>";
		echo $edit_link;
		echo $delete_link;

		//Query DB
		$query= "SELECT * FROM employee ";
		$query.="WHERE id={$emp_id}";

		$details="";
		$result= mysqli_query($connection, $query);
			while($row= mysqli_fetch_assoc($result)){
				$details.="<dt>Full Name</dt><dd>";
				$details.=$row["first_name"];
				$details.=" ";
				$details.=$row["fathers_name"];
				$details.=" ";
				$details.=$row["grand_fathers_name"];
				$details.="</dd><dt>Position</dt><dd>";
				$details.=$row["position"];
				$details.="</dd></br></br>";
			}
			echo $details;
			mysqli_free_result($result);
	?>
	
</div>
<?php  
	include("../Shared/db_close_connection.php");
	include("../Shared/Footer.php");
?>