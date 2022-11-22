<?php
// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = '🚨 Missing Title 🚨';
}
$site_title = 'Recipe Details';
$document_title = $page_title . ' | ' . $site_title; // Home | JAWN Clips

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/recipestyles.css">
    <link rel="stylesheet" href="https://use.typekit.net/wvt1hlm.css" />
  <title><?php echo $document_title ; ?></title>
</head>

<body>


  <div class="nav-bar">
      <span
        ><div class="homelabel"><b>Bright Bites</b></div></span
      >
      <ul>
        <li>
          <a href="<?php echo site_url(); ?>/index.php" style="text-decoration: none" ;
            ><b>Recipes</b></a
          >
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/admin/recipes/index.php"><b>Admin</b></a>
        </li>
      </ul>
    </div>
    <div class="headerbox">
      <img
        src="images/quesadilla-banner.png"
        alt="quesadillabig"
        class="quesadillabig"
      />
    </div>

