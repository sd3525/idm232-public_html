<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Recipe';
include_once __DIR__ . '/../../components/header.php';
?>

<?php
// get users data from database
$query = "SELECT * FROM recipes WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result->num_rows > 0) {
    // Get row from results and assign to $user variable;
    $user = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Recipe does not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>

<div>
  <div>
    <div>
      <div>
        <h1>Edit Recipe</h1>
      </div>
    </div>
    <div>
      <div>
        <div>
          <div>
            <form action="<?php echo site_url(); ?>/_includes/process-edit-recipe.php" method="POST">
              <div class="block">
                <label for="">Recipe Title</label>
                <input type="text" name="recipe_title"
                  value="<?php echo $user['recipe_title']; ?>">
              </div>

              <div class="block">
                <label for="">Prep Time</label>
                <input type="text" name="prep_time"
                  value="<?php echo $user['prep_time']; ?>">
              </div>


              <div class=" block">
                <label for="">Level</label>
                <input type="text" name="level" 
                    value="<?php echo $user['level']; ?>">
              </div>
              <div class=" block">
                <label for="">Yield</label>
                <input type="text" name="yield" 
                    value="<?php echo $user['yield']; ?>">
              </div>
              <div class=" block">
                <label for="">Rating</label>
                <input type="text" name="rating" 
                    value="<?php echo $user['rating']; ?>">
              </div>
              <div class=" block">
                <label for="">Ingredients</label>
                <input type="text" name="ingredients" 
                    value="<?php echo $user['ingredients']; ?>">
              </div>
              <div class=" block">
                <label for="">Instructions</label>
                <input type="text" name="instructions" 
                    value="<?php echo $user['instructions']; ?>">
              </div>
              <input type="submit" value="Update">

              <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php';