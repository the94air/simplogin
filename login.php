<?php require 'app/start.php'; ?>
<?php $user->onlyGuest(); ?>
<?php csrfProtector::init(); ?>
<?php include APP_ROOT . '/templates/head.php'; ?>

		<title>Login</title>
<?php include APP_ROOT . '/templates/header.php'; ?>

<?php include APP_ROOT . '/templates/navbar.php'; ?>

		<p>Login</p>

		<form action="<?php echo URL_ROOT . '/login.php'; ?>" method="post">
			<div>
				<label for="identifier">Username or email</label>
				<input type="text" name="identifier"  id="identifier" <?php $helper->postedText('identifier'); ?>>
				<?php $helper->hasError('identifier'); ?>
			</div>

			<div>
				<label for="password">Password</label>
				<input type="password" name="password"  id="password">
				<?php $helper->hasError('password'); ?>
			</div>

			<div>
				<input type="submit" name="Login" value="Login">
			</div>
		</form>

<?php include APP_ROOT . '/templates/footer.php'; ?>