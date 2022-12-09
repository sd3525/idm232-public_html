<table>
    <tbody>
            <?php
        while ($row = mysqli_fetch_assoc($recipes)) { ?>
                <div class="recipe_heads">
                    <p>
                        <img width="200" src="<?php echo $row['file_path']; ?>" alt="">
                    </p>
                    <a href="users/recipe-detail.php?id=<?php echo $row['id']; ?>">
                        <h2><?php echo $row['recipe_title']; ?></h2>
                    </a>
                </div>
        <?php
        }
        ?>
    </tbody>
  </table>