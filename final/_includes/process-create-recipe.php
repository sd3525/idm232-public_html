<?php
// include __DIR__ . '/../app.php';

// if (!$_POST) {
//     die('Unauthorized');


// Store $_POST data to variables for readability



// $recipe_title_value = $_POST['recipe_title'];
// $prep_time_value = $_POST['prep_time'];
// $level_value = $_POST['level'];
// $yield_value = $_POST['yield'];
// $rating_value = $_POST['rating'];
//  $ingredients_value = $_POST['ingredients'];
// $instructions_value = $_POST['instructions'];

// $result = add_recipe(
//     $recipe_title_value,
//     $prep_time,
//     $level_value,
//     $yield_value,
//     $rating_value,
//     $ingredients_value,
//     $instructions_value
// );

// // Check there are no errors with our SQL statement
// if ($result) {
//     redirect_to('/admin/recipes/index.php');
// } else {
//     $error_message = 'Sorry there was an error creating the recipe';
//     redirect_to('/admin/recipes?error=' . $error_message);
// }

// ?>



<?php
 include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability


$recipe_title_value = $_POST['recipe_title'];
$prep_time_value = $_POST['prep_time'];
$level_value = $_POST['level'];
$yield_value = $_POST['yield'];
$rating_value = $_POST['rating'];
$ingredients_value = $_POST['ingredients'];
$instructions_value = $_POST['instructions'];


$result = create_recipe(
$recipe_title_value,
$prep_time_value,
$level_value,
$yield_value,
$rating_value,
$ingredients_value,
$instructions_value
);


// echo '<pre>';
//     var_dump($query);
// echo '</pre>';


// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/recipes');
} else {
    $error_message = 'Could Not Add Recipe';
    redirect_to('/admin/recipes?error=' . $error_message);
}


