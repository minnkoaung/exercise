<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
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

	<form method="post"  action="updatestock">
  <div class="form-group">
    <label for="stockname">Stock Name</label>
    <input type="text"  name="name" class="form-control" id="stockname" placeholder="Stock Name">
  </div>
   <div class="form-group">
    <label for="stockname">Stock Price</label>
    <input type="text" name="price" class="form-control" id="stockprice" placeholder="Stock Price">
  </div>
 	<input type="submit" class="btn btn-success"  value="Add New Stock">
  
</form>
			</div>
		</div>
	</div>
	

</body>
</html>