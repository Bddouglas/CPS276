
/* WRITE THE NECESSARY PHP CODE HERE NOT THE $RESULT ARRAY ON LINES 35 AND 36.  YOU WILL NEED TO RETURN AN ARRAY THAT CONTIANS TO INDEXES. FIRST IS A PLACE FOR A MESSAGE (MAYBE BLANK OR NOT DEPENDING ON THE SITUATION) AND THE OTHER IS THE FORM OR THE TABLE DISPLAYING THE DATA */
<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$address = $_POST["useraddress"];
	$city = $_POST["usercity"];
	$state = $_POST["userstate"];
	$phone = $_POST["userphone"];
	$DOB = $_POST["userDOB"];
$conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));
mysqli_query($conn, "INSERT INTO finalProject (user_name, user_Email, user_city, user_state, user_address, user_phone, user_DOB) VALUES ('" . $name. "', '" . $email. "','" .$address ."','" . $city. "','" . $state . "','" . $phone. "','" $DOB . "')");
$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
$message = "Your information is saved successfully";
$type = "success";
}
return $output;
require_once "form.php";
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Final Project</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			.error {
				color: red;
				margin-left: 5px;
			}
			.space {
				margin-right: 30px;
			}
			nav ul li {
				list-style: none;
			}
			</style>
	</head>

	<body class="container">
		<nav>
			<ul>
				<li><a href="index.php?page=form">Add Contact Information</a></li>
				<li><a href="index.php?page=display">Display All Contacts Information</a></li>
			</ul>
		</nav>
		
		<?php
			//echo $result[0]; 
			//echo $result[1]; 
		?>
	</body>
</html> 