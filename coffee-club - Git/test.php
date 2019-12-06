<?php require_once('../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; 

$sql = "SELECT * FROM members";
$sql .= "Where id='" . $id . "'";
$result = mysqli_query($db, $sql);
confirm_result_set($result);

$subject = mysqli_fetch_assoc($result);
mysqli_free_result($result);
?>
<?php $page_title = 'Show Member'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="content">

	<a class="back-link" href="<?php echo url_for('/members/index.php'); ?>">&laquo; Back to List</a>

	<div class="member show">
		<h1>Members: <?php echo h($members['menu_name']); ?></h1>
		<div class="attributes">
			<dl>
				<dt>Menu Name</dt>
				<dd><?php echo h($members['menu_name']); ?></dd>
			</dl>
			<dl>
				<dt>Position</dt>
				<dd><?php echo h($members['position']); ?></dd>
			</dl>
			<dl>
				<dt>Visible</dt>
				<dd><?php echo $members['visible'] == '1' ? 'true' : 'false'; ?></dd>
			</dl>
		</div>

		//Subject ID: <?php echo h($id); ?>

	</div>

</div>
