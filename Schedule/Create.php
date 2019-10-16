<?php  
	include("../Shared/Header.php");
?>
<div class="container">
	<br>
	<h1>Creat a new Schdule</h1>
	<hr>
	<form class="mid" action="" method="post">
		<div class="form-group">
			<label for="workTitleId">Work Title:</label>
			<input type="text" name="workTitle" class="form-control" id="workTitleId" placeholder="Work Title">
		</div>

		<div class="form-group">
			<label for="dayId" class="">Day:</label>
			<select class="custom-select" id="dayId" name="day">
				<option selected>Select a Day</option>
				<option value="1">Sunday</option>
				<option value="2">Monday</option>
				<option value="3">Tuesday</option>
				<option value="4">Wednsday</option>
				<option value="5">Thursday</option>
				<option value="6">Friday</option>
				<option value="7">Saturday</option>
			</select>
		</div>

		<div class="form-group">
			<label for="timeId">Starting Time:</label>
			<input type="text" name="time" id="timeId" class="form-control pickTime">
		</div>

		<div class="form-group">
			<label for="durationId">Duration:</label>
			<input type="text" name="duration" class="form-control" id="durationId" placeholder="Duration of task">
		</div>

		<div class="form-group">
			<label for="productId">Product:</label>
			<input type="text" name="product" class="form-control" id="productId" placeholder="Product of task">
		</div>

		<div class="form-group">
			<label for="performedById">Performed by:</label>
			<input type="text" name="product" class="form-control" id="performedById" placeholder="Employee carrying out the task">
		</div>

		<div class="form-group">
			<label for="portionId">Portion:</label>
			<input type="text" name="portion" class="form-control" id="portionId" placeholder="Portion of the product">
		</div>

		<div class="form-group">
			<label for="categoryId">Category:</label>
			<select class="custom-select" id="categoryId" name="category">
				<option selected>Select the category of the product</option>
				<option value="1">Prep Work</option>
				<option value="2">Side Dishes</option>
				<option value="3">Breakfast</option>
				<option value="4">Nationsl Dishes</option>
				<option value="5">Pasta</option>
				<option value="6">Fish</option>
				<option value="7">Steak</option>
				<option value="8">Soup</option>
				<option value="9">Vegetable</option>
				<option value="10">Beverages</option>
			</select>
		</div>

		<div class="form-group">
			<label for="instructionsId">Instructions:</label>
			<textarea class="form-control" rows="5" name="instructions" id="instructionsId" placeholder="Write the instructions for the task..."></textarea>
		</div>

		<button type="submit" name="submit" value="submit" class="btn btn-dark "	>Submit</button>
		<br><hr><br>
	</form>
</div>

<script type="text/javascript">
	$(function(){
		$('#pickTime').datetimepicker();
	});
</script>

<?php  
	include("../Shared/Footer.php");
?>