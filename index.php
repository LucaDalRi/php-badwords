<?php
$paragrafoOriginale =
    'La Via Lattea (dal latino: Via Lactea) è la galassia a cui appartiene il nostro sistema solare;
    è "la galassia" per eccellenza:
    il nome infatti deriva dal greco galaxias (etimologicamente correlato alla parola latte)
    utilizzato in epoca greca per designarla.';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <h1>
        Paragrafo originale: <br>
        <?php echo $paragrafoOriginale ?>
    </h1>

    <hr>

    <h1>
        Lunghezza paragrafo originale: <br>
        <?php echo strlen($paragrafoOriginale) ?>
    </h1>

    <hr>

    <form action="" method="get">
        <h1>
            Parola da censurare:
        </h1>
        <input type="text" name="censura">
        <button type="submit">Vai!</button>
    </form>

    <hr>

    <?php
    $stringaCensurata = str_replace($_GET['censura'], ' *** ', $paragrafoOriginale);
    ?>

    <h1>
        Paragrafo censurato: <br>
        <?php echo $stringaCensurata ?>
    </h1>

    <hr>

    <h1>
        Lunghezza paragrafo censurato: <br>
        <?php echo strlen($stringaCensurata) ?>
    </h1>

    <hr>

    <h1>
        Parola censurata: <br>
        <?php echo $_GET['censura'] ?>
    </h1>

</body>

</html>