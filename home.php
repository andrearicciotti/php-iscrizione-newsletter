<?php 

session_start()

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Benvenuto nella home page.</h1>
    <p>Il tuo indirizzo mail: <strong><?php echo $_SESSION['mail']; ?></strong></p>
    <a href="./index.php" class="btn btn-danger">Logout</a>
</body>
</html>