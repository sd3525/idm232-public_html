<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability

$recipe_title = $_POST['recipe_title'];
$prep_time = $_POST['prep_time'];
$level = $_POST['level'];
$yield = $_POST['yield'];
$rating = $_POST['rating'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];
$id_value = $_POST['id'];


// Create a SQL statement to insert the data into the database
$query = "INSERT INTO recipes (recipe_title, prep_time, level, yield, rating, ingredients, instructions) 
VALUES ('$recipe_title', '$prep_time', '$level', '$yield', '$rating','$ingredients','$instructions') WHERE id = ($id_value)";

var_dump($_POST);

die;

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Could Not Add Recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}