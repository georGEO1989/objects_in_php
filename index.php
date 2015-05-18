<!doctype html>
<html>
<head>
	<title>Check for Spam</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h2>Let's find some spam</h2>	
	<form class="form" action="objects.php" method="post">
		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" name="name"><br>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input class="form-control" type="text" name="email"><br>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input class="form-control" type="password" name="password"><br>
		</div>
		<div class="form-group">
			<label>From</label>
			<input class="form-control" type="text" name="from">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>