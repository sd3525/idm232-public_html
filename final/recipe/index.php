<?php

include_once __DIR__ . '/../app.php';


$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $recipe variable;
    $recipe = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/recipes?error=' . $error_message);
}

$page_title = 'Recipe Details';
include_once __DIR__ . '/../_components/header.php';
?>
<?php
     $site_url = site_url();
     echo "
        <div class = 'main'>
            <div class = 'top'>
                <div class= 'info__card'>
                    <div class= 'recipe__title'>
                    {$recipe['recipe_title']}
                    </div>

                    </div>
                    <div>
                    <img class= 'recipe__image' src= '{$site_url}/{$recipe['file_path']}'>
                    </div>
                    </div>
                    <div class= 'subheading'> Introduction </div>
                    <div class= 'notes2'>
                    {$recipe['introduction']}
                    </div>
                    </div>
                    <div class= 'subheading'> Ingredients </div>
            <div class= 'notes2'>{$recipe['ingredients']}</div>
                    <div class= 'subheading'> Instructions</div>
                <div class= 'notes2'>
                        {$recipe['instructions']}
                    </div>
                </div>
            </div>
        </div>
";
?>
<?php include_once __DIR__ . '/../_components/footer.php';
?>