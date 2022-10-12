<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Jakaś baza danych</title>
    </head>
    <body>
        <?php
            $con = new mysqli("51.123.34.245","admin","123456","quiz");
            $sql = "SELECT q.content as question, a.content as answer FROM questions_has_answers as qhs JOIN questions as q "
            $res = $con->query($sql);
            $row = $res->fetch_all(MYSQLI_ASSOC);

        ?>
    </body>
</html>