<!DOCTYPE html>
<html>

<head>
    <title>Se Connecter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Page Style -->
    <link rel="stylesheet" href="style_login.css">
    <!-- AlertifyJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <style>
        .alertify-notifier .ajs-message.ajs-success {
            background: red;
            color: white;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div id="glob">

    <?php

$table = "user";

include "config.php";
include "login.php";

?>

        <div class="contenu">
            <br></br>
            <h1>Se connecter</h1>
            <form action="index.php" method="post">
                <label for="fid">Identifiant:</label></br>
                <input type="number" name="cin"><br><br>
                <label for="pass">Mot de passe:</label></br>
                <input type="password" name="mpass" id="pass"><br><br>
                <button type="submit" name="go" formmethod="post" value="Connecter">Connecter</button>
            </form>


        </div>
    </div>
</body>

</html>