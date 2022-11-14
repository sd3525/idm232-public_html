<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Users';
include_once __DIR__ . '/../../components/header.php';
?>

<?php
// get users data from database, here you can decide the columns shown
$query = 'SELECT * FROM recipes';
$result = mysqli_query($db_connection, $query);

?>

<div>


  <div>
    <div>
      <div>
        <h1>Recipes</h1>
        <p>A list of all the recipes on the site</p>
        <?php
          if (isset($_GET['error'])) {
              echo "<p>Error: " . $_GET['error'] . '</p>';
          }

?>
      </div>
      <div>
        <button type="button">
            <a href="<?php echo site_url() . '/admin/recipes/create.php' ?>">
            Add Recipe</a></button>
      </div>
    </div>
    <div>
      <div>
        <div>
          <div>
            <table>
              <thead>
                <tr>
                  <th scope="col">Recipe Title</th>
                  <th scope="col">Prep Time
                  </th>
                  <th scope="col">Level</th>
                  <th scope="col">Yield</th>
                  <th scope="col">Rating</th>
                  <th scope="col">Rating</th>
                  <th scope="col">Ingredients</th>
                  <th scope="col">Instructions</th>
                </tr>
              </thead>
              <tbody>
                <?php
    while ($user = mysqli_fetch_array($result)) {
        echo "<tr>
                <td>{$user['id']}</td>
                <td>{$user['recipe_title']}</td>
                <td>{$user['prep_time']}</td>
                <td>{$user['level']}</td>
                <td>{$user['yield']}</td>
                <td>{$user['rating']}</td>
                <td>{$user['ingredients']}</td>
                <td>{$user['instructions']}</td>
                <td>
                  <a href='http://localhost:8888/admin/recipes/edit.php?id={$user['id']}' >Edit</a>
                  <a href='http://localhost:8888/admin/recipes/delete.php?id={$user['id']}' >Delete</a>
                </td>
              </tr>";
    }
?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../components/footer.php';