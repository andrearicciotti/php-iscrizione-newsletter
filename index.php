<?php
$input_mail = $_GET['mail'];


// controllo e-mail diretto in pagina


// var_dump($_GET, $input_mail);
// $mail_flag = false;

// if(str_contains($input_mail, '@') && str_contains($input_mail, '.')) {
//     // mail valida
// } else {
//     // mail non valida
//     $mail_flag = true;
//     var_dump($_GET);
// }


// controllo e-mail da altra pagina di funzioni.


var_dump(__DIR__);
include __DIR__ . '/functions.php';

$mail_flag = mail_validator($input_mail);
var_dump($mail_flag);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Newsletter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container text-center my-5">

        <form action="index.php" method="GET" class="p-2 <?php if($mail_flag === true) {echo 'error-mail';}?>">
            <label for="mail">Inserisci il tuo indirizzo e-mail.</label>
            <input type="text" name="mail" id="mail">

            <div class="text-center my-2">
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>

            <?php if($mail_flag === true) {?>
            <div class="text-center my-2">
                <p>L' indirizzo e-mail inserito <strong>non e' corretto</strong>, deve contenere almeno una " <strong>@</strong> " e un " <strong>.</strong> ".</p>
                <p><strong>Riprova.</strong></p>
            </div>
            <?php } ?>

        </form>

    </div>
</body>

</html>