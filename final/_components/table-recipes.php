<?php
if (!isset($recipes)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>
<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Recipe Title</th>
      <th scope="col">Prep Time</th>
      <th scope="col">Level</th>
      <th scope="col">Yield</th>
      <th scope="col">Rating</th>
      <th scope="col">Ingredients</th>
      <th scope="col">Instructions</th>
      <th scope="col">
        <span class="sr-only">Edit</span>
      </th>
    </tr>
  </thead>

  <tbody>
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
    while ($recipe = mysqli_fetch_array($recipes)) {
        echo "
          <tr>
          <td>{$recipe['id']}</td>
          <td>{$recipe['recipe_title']}</td>
          <td>{$recipe['prep_time']}</td>
          <td>{$recipe['level']}</td>
          <td>{$recipe['yield']}</td>
          <td>{$recipe['rating']}</td>
          <td>{$recipe['ingredients']}</td>
          <td>{$recipe['instructions']}</td>
          <td>
            <a href='{$site_url}/admin/recipes/edit.php?id={$recipe['id']}' >Edit</a>
            <a href='{$site_url}/admin/recipes/delete.php?id={$recipe['id']}' >Delete</a>
          </td>
          </tr>";
    }
    ?>
  </tbody>
</table>