<?php
if (!isset($result)) {
    echo '$recipes variable is not defined. Please check the code.';
}
?>    
          
<?php
    $site_url = site_url();
    while ($recipes = mysqli_fetch_array($results)) {
        echo "
        <a href='{$site_url}/recipeDetail.php?id={$recipes['id']}' class=''>
            <div class=''>
            <img class='' width='100px' height='100px' src='{$recipes['image_path']}' alt=''>                
                <div class=''>
                    <p class=''>{$recipes['recipes']}</p>
                    <p class=''>{$recipes['introduction']}</p>
                </div> 
            </div>
        </a>    
        ";
    }
?>
