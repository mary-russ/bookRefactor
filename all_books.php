<?php
if (isset($_GET['author_id'])) {
	$author_id = (int) $_GET['author_id'];
	$q = mysqli_query($db, 'SELECT * FROM authors as a LEFT JOIN
    books_authors as ba ON a.author_id=ba.author_id LEFT JOIN books as b
     ON b.book_id=ba.book_id WHERE a.author_id='.$author_id);
} else {
	$q = mysqli_query($db, 'SELECT * FROM books as b INNER JOIN
    books_authors as ba ON b.book_id=ba.book_id INNER JOIN authors as a
     ON a.author_id=ba.author_id');
}

$result = [];
$books = [];
while ($row = mysqli_fetch_assoc($q)) {
	$book_id = $row['book_id'];
	$books[$book_id]['book_title'] = $row['book_title'];
	$books[$book_id]['authors'][$row['author_id']] = $row['author_name'];
}
$result['books'] = $books;
$result['title'] = 'Книги';
$result['content'] = 'templates/all_books_public.php';
$result['header'] = 'templates/header_public.php';
//echo '<pre>'.print_r($result, true).'</pre>';
render($result, 'templates/layouts/normal_layout.php');
