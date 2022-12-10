<?php

include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';

// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT *';
$query .= ' FROM recipes';
$query .= " WHERE recipe_title LIKE '%{$search}%'";
$query .= " OR file_path LIKE '%{$search}%'";
$query .= " OR introduction LIKE '%{$search}%'";
$query .= " OR ingredients LIKE '%{$search}%'";
$query .= " OR instructions LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $recipes_results = true;
} else {
    $recipes_results = false;
}

?>

<div class="title">Welcome to Bright Bites!</div>
<img src="images/sun.png" alt="sun" class="sun" />
<div class="">
    <div class="">
        <div class="">
        <div class="homesubhead">All Recipes:</div>
        </div>
    </div>    
</div>

<form action="<?php echo site_url(); ?>/search" method="GET">
<input class=" searchbox" type="text" name="search" id="search" placeholder="Search">
<button class="search-btn" type="submit">Search</button>
</form>

<?php
// get data from database

$query = 'SELECT * FROM recipes ORDER BY recipe_title ASC';
$result = mysqli_query($db_connection, $query);

?>



<div class="">  
    <div class="">
        <?php include __DIR__ . '/_components/recipeCards.php'; ?>
    </div>
</div>



</main>


<?php include_once __DIR__ . '/_components/footer.php';
?>

