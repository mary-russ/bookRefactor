<!DOCTYPE html>
<html>
<head>
<title><?= $data['title']; ?></title>

        <meta charset="UTF-8">       
    </head>
    <body>
        <div style="height: 70px; ">
            <?php
            include $data['header'];
            ?>
        </div>
        <div >
            <?php
            include $data['content'];
            ?>
        </div>

    </body>
</html>