<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$recipe_title = sanitize_value($_POST['recipe_title']);
$file_path = sanitize_value($_POST['file_path']);
$introduction = sanitize_value($_POST['introduction']);
$ingredients = sanitize_value($_POST['ingredients']);
$instructions = sanitize_value($_POST['instructions']);
$id = $_POST['id'];


// Create a SQL statement to insert the data into the database
$query = "UPDATE recipes SET recipe_title = '{$recipe_title}', file_path = '{file_path}', instructions = '{$instructions}', ingredients = '{$ingredients}', instructions = '{$instructions}' WHERE id = {$id}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'recipe was not updated';
    redirect_to('/admin/recipes?error=' . $error_message);
}
?>