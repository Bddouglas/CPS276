<?php
$date = $_POST['date'];



$timestamp = strtotime($_POST['date']);

$date= $_POST['date'];

$name = $data->name;



$pdo = new PdoMethods();

$sql = "INSERT INTO notes (date) VALUES (:date)";

$bindings = [
	[':notes', $date, 'str'],
];









?>