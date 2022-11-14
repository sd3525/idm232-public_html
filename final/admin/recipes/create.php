<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Add Recipe';
include_once __DIR__ . '/../../components/header.php';
?>

<?php
// get recipes data from database
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div>
  <div>
    <div>
      <div>
        <h1>Add Recipe</h1>
      </div>
    </div>
    <div>
      <div>
        <div>
          <div>
            <form action="<?php echo site_url() . '/_includes/process-create-recipe.php' ?>"; method="POST">
              <div class="block">
                <label for="">Recipe Title</label>
                <input class="" type="text" name="recipe_title">
              </div>

              <div class="block">
                <label for="">Prep Time</label>
                <input class="" type="text" name="prep_time">
              </div>


              <div class="block">
                <label for="">Level</label>
                <input class="" type="text" name="level">
              </div>
              <div class="block">
                <label for="">Yield</label>
                <input class="" type="text" name="yield">
              </div>
              <div class="block">
                <label for="">Rating</label>
                <input class="" type="text" name="rating">
              </div>
              <div class="block">
                <label for="">Ingredients</label>
                <input class="" type="text" name="ingredients">
              </div>
              <div class="block">
                <label for="">Instructions</label>
                <input class="" type="text" name="instructions">
              </div>
              <input
                type="submit" value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php';