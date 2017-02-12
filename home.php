<?php require 'app/start.php'; ?>
<?php $user->onlyAuthenticated(); ?>
<?php include APP_ROOT . '/templates/head.php'; ?>

		<title>Dashboard</title>
<?php include APP_ROOT . '/templates/header.php'; ?>

<?php include APP_ROOT . '/templates/navbar.php'; ?>

		<p>Dashboard</p>

<?php include APP_ROOT . '/templates/footer.php'; ?>
