<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per esserti Iscritto!</h1>
    <h3>Il tuo indirizzo mail: <?php echo $_SESSION['mail']; ?></h3>
    <a href="./home.php" class="btn btn-dark">Home Page</a>
</body>
</html>