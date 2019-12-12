<?php require_once('../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = 'Members Menu'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

  
<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    
    <ul>
      <li><a href="<?php echo url_for('/members/index.php'); ?>">Members</a></li> 
      <li><a href="<?php echo url_for('/members/admins/index.php'); ?>">Admin</a></li> 
      
    </ul>
    
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
