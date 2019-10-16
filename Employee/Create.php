<?php  
	include("../Shared/Header.php");
?>
<div class="container">
	<br>
	<h1>Creat a new Employee Record</h1>
	<hr>
	<form class="mid" action="CreateProcessing.php" method="post">
		<div class="form-group">
			<label for="firstNameId">First Name:</label>
			<input type="text" name="first_name" class="form-control" id="firstNameId" placeholder="First Name">
		</div>
		<div class="form-group">
			<label for="fatherNameId">Father's Name:</label>
			<input type="text" name="fathers_name" class="form-control" id="fatherNameId" placeholder="Father's Name">
		</div>
		<div class="form-group">
			<label for="grandFatherNameId">Grandfather's Name:</label>
			<input type="text" name="grand_fathers_name" class="form-control" id="grandFatherNameId" placeholder="Grandfather's Name">
		</div>
		<div class="form-group">
			<label for="positionId">Position:</label>
			<input type="text" name="position" class="form-control" id="positionId" placeholder="Position">
		</div>
		<button type="submit" name="submit" value="submit" class="btn btn-dark "	>Submit</button>
		<br><hr><br>
	</form>
</div>

<?php  
	include("../Shared/Footer.php");
?>