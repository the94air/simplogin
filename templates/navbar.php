		<ul>
			<?php if ($user->guest()): ?>
			<li><a href="<?php echo URL_ROOT . '/'; ?>">Home</a></li>
			<li><a href="<?php echo URL_ROOT . '/login.php'; ?>">Login</a></li>
			<li><a href="<?php echo URL_ROOT . '/register.php'; ?>">Register</a></li><?php endif; ?>

			<?php if ($user->authenticated()): ?>
			<li><a href="<?php echo URL_ROOT . '/home.php'; ?>">dashboard</a></li>
			<li><a href="<?php echo URL_ROOT . '/logout.php'; ?>">Logout</a></li><?php endif; ?>
		</ul>
		<?php $helper->outputResult(); ?>
		<?php $helper->outputRedirectResult(); ?>