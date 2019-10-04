<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Main Menu</h2>
    
    <ul>
			<li><a href="<?php echo url_for('login.php'); ?>">Login</a></li>
      <!--<li><a href="<?php echo url_for('/members/index.php'); ?>">Members</a></li> -->
      
    </ul>
    <p>This if the first page of the project</p>
  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
