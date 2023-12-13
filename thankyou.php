<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per esserti Iscritto!</h1>
    <h3>Il tuo indirizzo mail: <?php echo $_SESSION['mail']; ?></h3>
</body>
</html>