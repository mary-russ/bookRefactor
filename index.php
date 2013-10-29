<?php

include './inc/functions.php';

$page = '';
if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'index_public':
			$page = 'all_books';
			break;
		case 'add_book':
			$page = 'add_book';
			break;
		case 'authors':
			$page = 'authors';
			break;
		default:
			$page = 'all_books';
			break;
	}
} else {
	$page = 'all_books';
}

include './' . $page . '.php';
