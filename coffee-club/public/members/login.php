<?php
require_once('../../private/initialize.php');

$errors = [];
$username = '';
$password = '';

if(is_post_request()) {

  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

	if(is_blank($username)){
		$erros[] = 'Username cannot be blank';
	}
	if(is_blank($password)){
		$erros[] = 'Password cannot be blank';
	}
	
	if(empty($errors)){
			$login_failure_msg = 'Log in was unsuccessful.';
		$admin = find_admin_by_username($username);
		if($admin){
			if(password_verify($password, $admin['hashed_password']))
				//password matches
					log_in_admin($admin);
  				redirect_to(url_for('./index.php'));
		} else {
			//username found but not password
			$errors[] = $login_failure_msg;
		}
	}else{
	//no user found
					$errors[] = $login_failure_msg;
	}
}
?>

<?php $page_title = 'Log in'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<html>

<head>
	<title>Coffee-Club</title>
	<!--*************ReCaptia v2 script***************-->
	<!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer> -->

	<!--*************ReCaptia v3 Script ***************-->
	<script src="https://www.google.com/recaptcha/api.js?render=6Lepx8IUAAAAANjuT69GCDQSXSScSn9grCui1Yv1"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('6Lepx8IUAAAAANjuT69GCDQSXSScSn9grCui1Yv1', {
				action: 'homepage'
			}).then(function(token) {
				...
			});
		});

	</script>
</head>
<h1>Log in</h1>

<?php echo display_errors($errors); ?>

<body>
	<div id="content">
		<form action="login.php" method="post">
			Username:<br />
			<input type="text" name="username" value="<?php echo h($username); ?>" /><br />
			Password:<br />
			<input type="password" name="password" value="" /><br />
			<input type="submit" name="submit" value="Submit" />
		</form>
<a href="reset.php">Forgot your password?</a>
		<!--*********ReCaptia v2 **************-->
		<!--<form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6Lf6xsIUAAAAAEwkqEd6Oqv6NPON5SOZQwjPzbvG"></div>
      <br/>
     <input type="submit" value="Submit">
    </form>-->
	</div>
</body>

</html>
<?php include(SHARED_PATH . '/footer.php'); ?>
