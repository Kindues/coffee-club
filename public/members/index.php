<?php require_once('../../private/initialize.php'); ?>

<?php
  $members = [
 ['id' => '1', 'firstName' => 'Sarah', 'lastName' => 'Perkins', 'email'
=> 'sarahp@email.com'],
 ['id' => '2', 'firstName' => 'Bill', 'lastName' => 'Perkins', 'email' =>
'billp@email.com'],
 ['id' => '3', 'firstName' => 'Daphne', 'lastName' => 'Cooper', 'email'
=> 'daphnec@email.com'],
 ['id' => '4', 'firstName' => 'Francis', 'lastName' => 'Moore', 'email'
=> 'francism@email.com']
];
?>

<?php $page_title = 'members'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1>Members</h1>

    <div class="actions">
      <a class="action" href="">Create New Subject</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>Member ID</th>
        <th>First</th>
        <th>Last</th>
  	    <th>Email</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($members as $members) { ?>
        <tr>
          <td><?php echo h($members['id']); ?></td>
          <td><?php echo h($members['firstName']); ?></td>
          <td><?php echo h($members['lastName']); ?></td>
    	    <td><?php echo h($members['email']); ?></td>
          <td><a class="action" href="<?php echo url_for('/members/show.php?id=' . h(u($members['id']))); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
