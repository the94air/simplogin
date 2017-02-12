<?php require 'app/start.php'; ?>
<?php $user->onlyGuest(); ?>
<?php csrfProtector::init(); ?>
<?php include APP_ROOT . '/templates/head.php'; ?>

		<title>Register</title>
<?php include APP_ROOT . '/templates/header.php'; ?>

<?php include APP_ROOT . '/templates/navbar.php'; ?>

		<p>Register</p>

		<form action="<?php echo URL_ROOT . '/register.php'; ?>" method="post">
			<div>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" <?php $helper->postedText('username'); ?>>
				<?php $helper->hasError('username'); ?>
			</div>

			<div>
				<label for="email">Email</label>
				<input type="text" name="email" id="email" <?php $helper->postedText('email'); ?>>
				<?php $helper->hasError('email'); ?>
			</div>

			<div>
				<label for="password">Password</label>
				<input type="password" name="password"  id="password">
				<?php $helper->hasError('password'); ?>
			</div>

			<div>
				<label for="confirm_password">Password confirm</label>
				<input type="password" name="confirm_password"  id="confirm_password">
				<?php $helper->hasError('confirm_password'); ?>
			</div>

			<div>
				<input type="submit" name="Register" value="Register">
			</div>
		</form>

<?php include APP_ROOT . '/templates/footer.php'; ?>