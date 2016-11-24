<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajax Example</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/ajax.js"></script>
</head>
<body>
<!-- php inject our Navigation using the require method -->
<?php require_once "nav.php"; ?>

<!-- Continue HTML -->
<h2>Ajax Example</h2>
<form method="post" action="ajaxprocess.php" enctype="multipart/form-data">
<label>Name
	<input type="text" name="name" value="" required><br>
</label>
<br>
<label>Photo
	<input type="file" name="photo" value="" required><br>
</label>
<br>
<label>Birthday
	<input type="text" name="birthday" value="" required><br>
</label>
	<br>
<p>Gender</p>
<label>Male
	<input type="radio" name="gender" value="Male" required>
</label>
<label>Female
	<input type="radio" name="gender" value="Female" required><br>
</label>
	<br>
<label>Sports
	<textarea name="sports" value="" required></textarea><br>
</label>
	<br>
<label>Favorite Book
	<input type="text" name="book" value="" required><br>
</label>
	<br>
<label>Favorite Song
	<input type="text" name="song" value="" required><br>
</label>
	<br>
<label>Favorite Movie
	<input type="text" name="movie" value="" required><br>
</label>
	<br>
<br>
<input type="submit" name="submit" value="Submit">
</form>

<div id="profile">
	<h2>Profiles</h2>
</div>
</body>
</html>