<?php
    session_start();
    if (!isset($_SESSION['usuari'])) {
        header("location: ./index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pàgina principal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php echo "Benvingut " . $_SESSION['usuari']; ?>
        <br><a href="sessioPrincipal.php">Logout</a>

        <script src="" async defer></script>
    </body>
</html>