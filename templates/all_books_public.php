<table border="1"><tr><td>Книга</td><td>Автори</td></tr>
<?php
foreach ($data['books'] as $row) {
    echo '<tr><td>' . $row['book_title'] . '</td>
        <td>';
    $ar = array();
    foreach ($row['authors'] as $k => $va) {
        $ar[] = '<a href="index.php?author_id=' . $k . '">' . $va . '</a>';
    }
    echo implode(', ', $ar) . '</td></tr>';
}
?>
</table>