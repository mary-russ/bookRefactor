
<form method="post" action="add_book.php">
    Име: <input type="text" name="book_name" />
    </br></br>

    <div>Автори:<select name="authors[]" multiple style="width: 200px">
            <?php
 
            foreach ($data['authors'] as $row) {
                echo '<option value="' . $row['author_id'] . '">
                    ' . $row['author_name'] . '</option>';
            }
            ?>

        </select></div>
      </br></br>  
    <input type="submit" value="Добави" />    

</form>