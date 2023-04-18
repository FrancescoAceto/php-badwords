
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CENSORED</title>
</head>
<body>
    <h1>Paragrafo</h1>
    <h2>Original paragraph</h2>
    <p>
        <?php
            echo $_GET['paragraph'];
        ?>
    </p>

    <h3>Paragraph Length:</h3>
    <span>
        <?php
            echo strlen($_GET['paragraph']);
        ?>
        characters
    </span>

    <h2>Word To Censor</h2>
        <?php
            echo $_GET['badword'];
        ?>

    <h3>Censored Paragraph</h3>
        <?php
            echo str_replace ($_GET['badword'], '***', $_GET['paragraph']);
        ?>

    <h3>New Paragraph Length</h3>
    <span>
        <?php
            echo strlen (str_replace($_GET['badword'], '***', $_GET['paragraph']));
        ?>
        characters
    </span>
</body>
</html>