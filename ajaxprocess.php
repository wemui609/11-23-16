<?php 
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$register = date("m/d/y",time());
$sports = explode(", ", $_POST['sports']);
$book = $_POST['book'];
$song = $_POST['song'];
$movie = $_POST['movie'];

print_r(get_defined_vars());

$peopleData = file_get_contents('ppl.json');
$tempArray = json_decode($peopleData, true);

echo "<hr><br>TEMP ARRAY<br>";
print_r($tempArray);
echo "<br><br>";

//format the key
$objectCount = count($tempArray) + 1;
$key = "object".$objectCount;

//format the id
$id = end($tempArray)["id"];
$id = str_pad(++$id, 4, "0", STR_PAD_LEFT);
//echo $id;

if( $_FILES ){
	$image = $_FILES['photo']['name'];
	switch ($_FILES['photo']['type']) {
		case 'image/jpeg':
			$ext = "jpg";
			break;

		default:
			$ext = "";
			break;
	}
	if ( $ext ){
		$n = "img/$id.$ext";
		move_uploaded_file($_FILES['photo']['tmp_name'], $n);
	}	
} else {
		echo "No file to upload";
	};

$addThis = array(
		"id" => $id,
		"name" => $name,
		"birthday" => $birthday,
		"gender" => $gender,
		"register" => $register,
		"sports" => $sports,
		"favs" => (object) array(
				"book" => $book,
				"song" => $song,
				"movie" => $movie,
			),
	);

$tempArray[$key] = $addThis;

print_r($tempArray);

$jsonData = json_encode($tempArray);
file_put_contents('ppl.json', $jsonData);

?>