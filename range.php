<?php
$connect = mysqli_connect("localhost", "root", "","huhu");
$query = "SELECT * FROM book ORDER BY ID asc";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			date range
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap//3.3.6/css/bootstrap.min.css">
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	</head>
	<body>
		<br><br>
		<div class="container" style="width:900px;">
			<h2 align="center">php date range
				
			</h2>
			<h3 align="center">order data</h3><br>
			<div class="col-md-3">
				<input type="text" name="from_date" id="from_date" class="form-control" placeholder="">
			</div>
			<div class="col-md-3">
				<input type="text" name="to_date" id="to_date" class="form-control" placeholder="">
			</div>

			<div class="col-md-5">
				<input type="button" name="filter" id="filter" value="Filter" class="btn"> <!---->
			</div>
			<div style="clear:both"></div>
			<br>
			<div id="order_table">
				<table class="table table-bordered">
					<tr>
						<th width="5%">ID</th>
						<th width="25%"> Name</th>
						<th width="22%">Email</th>
						<th width="25%">Address</th>
						<th width="12%">Phone</th>
						<th width="12%"> date</th>
					</tr>
					<?php
					while($row = mysqli_fetch_array($result))
					{
						?>
						<tr>
							<td><?php echo $row["ID"]; ?></td>
							<td><?php echo $row["Name"]; ?></td>
							<td><?php echo $row["Email"]; ?></td>
							<td><?php echo $row["Address"]; ?></td>
							<td><?php echo $row["Phone"]; ?></td>
							<td><?php echo $row["date"]; ?></td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
	</body>
</html>
<script>
	$(document).ready(function(){
		$.datepicker.setDefaults({
			dateFormat: 'yy-mm-dd'
		});
	$(function()){
		$("#from_date").datepicker();
		$("to_date").datepicker();
	});	
	$('#filter').click(function(){
		var from_date = $ ('#from_date').val();
		var to_date = $ ('#to_date').val();
		if(from_date != '' && to_date != '')
		{
			$.ajax({
				url:"filter.php",
				method:"POST",
				data:{from_date:from_date,to_date:to_date},
				success:function(data)
				{
					$('#order_table').html(data);
				}

			});
		}
		else
		{
			alert("Please select date");
		}
	});
	});
	
</script>