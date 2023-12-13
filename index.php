<?php
$input_mail = $_GET['mail'];
var_dump($_GET, $input_mail);

$mail_flag = false;

if(isset($_GET['mail']) && str_contains($input_mail, '@') && str_contains($input_mail, '.')) {
    // mail valida
} else {
    // mail non valida
    $mail_flag = true;
    var_dump($_GET);
}

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
                <p>L' indirizzo e-mail inserito <strong>non e' corretto</strong>, deve contenere almeno un str"@" e un ".".</p>
            </div>
            <?php } ?>

        </form>

    </div>
</body>

</html>