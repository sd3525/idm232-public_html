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

$result = add_recipe(
    $recipe_title,
    $file_path,
    $introduction,
    $ingredients,
    $instructions
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Sorry there was an error creating the recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}