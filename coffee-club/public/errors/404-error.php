<?php
include_once('../../private/initialize.php');
include(SHARED_PATH . '/header.php');
?>
<body>
    <div class="error">
        <img src="<?= url_for('/images/coffee-ring.jpg'); ?>" alt="Coffee Ring">
        <h2>Oops, Something went wrong.</h2>
        <p>Fun coffee fact for the trouble: Coffee was discovered by a goat herder</p>
        <p>Click <a href="<?= url_for('/index.php'); ?>" title="Home">here</a> to go back to the home page</p>
    </div>
</body>
<?php include(SHARED_PATH . '/footer.php'); ?>