<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo $another_title; ?></h1>
	<h2><?php echo $test; ?></h2>			
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-success">Add New Stock</a> <br/>
				<table class="table table-striped">
  					<thead>
  						<tr>
  							<th>ID</th>
  							<th>Name</th>
  							<th>Price</th>
  							<th colspan="3">Actions</th>
  						</tr>
  					</thead>
  					<tbody>
  						<?php foreach($stocks as $stock) { ?>
							<tr>
								<td><?php echo $stock['id'] ?></td>
								<td><?php echo $stock['name'] ?></td>
								<td><?php echo $stock['price'] ?></td>
								<td><a class="btn btn-warning" href="http://wpa26.dev/blog/edit">Edit</a>
								<a class="btn btn-danger" href="http://wpa26.dev/blog/delete">Delete</a></td>
							</tr>
  						<?php } ?>
  					</tbody>
				</table>
			</div>
		</div>
	</div>
	

</body>
</html>