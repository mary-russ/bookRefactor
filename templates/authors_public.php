<form method="post" action="index.php?page=authors">
    Име: <input type="text" name="author_name" />
    <input type="submit" value="Добави" />    
</form>
</br></br>
<table border='1'>
    <tr><th>Автор</th></tr>

    <?php
    foreach ($data['authors'] as $row) {
        echo '<tr><td>' . $row['author_name'] . '</td></tr>';
    }
    ?>

</table>