<?php
  if(!isset($page_title)) { $page_title = 'Member Area'; }
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/coffee-club.css'); ?>" />
  </head>

  <body>
    <header>
      <h1>Coffee Club Members</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/index.php'); ?>">Menu</a></li>
      </ul>
    </navigation>
