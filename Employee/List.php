<?php  
	include("../Shared/Header.php");
	include("../Shared/db_open_connection.php");
?>
<div class="container-fluid">
	<br/>
	<h1>Schedule List</h1>
	<a href="Create.php"><button class="btn btn-dark">New Schedule Item</button></a><br><br>
	<table class="table table-dark table-striped table-hover">
		<th>
			<td>Name</td>
			<td>Position</td>
		</th>
		<?php
			$query="SELECT * FROM employee";
			
			$table_rows="";
			$result= mysqli_query($connection, $query);
			while($row= mysqli_fetch_assoc($result)){
				$id=$row["id"];
				$url = "<tr onclick= rowLink({$id}) ><td>";
				$table_rows.=$url;
				$table_rows.=$row["first_name"];
				$table_rows.=" ";
				$table_rows.=$row["fathers_name"];
				$table_rows.=" ";
				$table_rows.=$row["grand_fathers_name"];
				$table_rows.="<td/><td>";
				$table_rows.=$row["position"];
				$table_rows.="<td/><tr/>";
			}
			echo $table_rows;
			mysqli_free_result($result);
		?>
	</table>
</div>

<script type="text/javascript">
	var rowId=0;
	function rowLink(rowId){
		window.location='Detail.php?id='+rowId;
	}
</script>

<?php  
	include("../Shared/db_close_connection.php");
	include("../Shared/Footer.php");
?>