<?php
// Make sure the path is correct for each include on this page. Delete this comment once done
include_once __DIR__ . '/app.php';
$page_title = 'View Recipe';
include_once __DIR__ . '/_components/header.php';
?>

<?php
// get recipe data from database
$query = "SELECT * FROM recipe WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

?> 


<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
          
<?php
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($result)) {
        echo "
        <div class=''>
            <div class=''>
                <div class=''>
                    <div>
                        <h2 class=''>{$recipe['recipe_title']}</h2>
                        <div> 
                        <img class='' width='500px' height='500px' src='{$site_url}/{$recipe['file_path']}' alt=''>
                            <p class=''> Introduction: {$recipe['introduction']}</p>
                            <p class=''> Ingredients: {$recipe['ingredients']}</p>
                            <p class=''> Instructions: {$recipe['instructions']}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        ";
    }
?>
            <!-- </div>
          </div> -->

          <?php include_once __DIR__ . '/_components/footer.php';