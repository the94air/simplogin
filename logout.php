<?php require 'app/start.php'; ?>
<?php $user->onlyAuthenticated(); ?>
<?php

	unset($_SESSION['user_id']);
	
	$helper->redirectResult('You have been logged out');
	$helper->redirect('/');

?>