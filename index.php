<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Jakaś baza danych</title>
    </head>
    <body>
        <?php
            $con = new mysqli("51.123.34.245","admin","123456","quiz");
            $sql = "SELECT a.content AS answer, a.is_right, q.content AS question FROM answers AS a JOIN questions AS q ON a.questions_id = q.id";

            $res = $con->query($sql);
            $row = $res->fetch_all(MYSQLI_ASSOC);

        ?>
    </body>
</html>