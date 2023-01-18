<!DOCTYPE html>
<html>

<head>
    <title>Connexion</title>
</head>

<body>

    <?php
    /*Connexion à la base de données sur le serveur tp-epua*/
    $conn = @mysqli_connect("tp-epua:3308", "pruvostj", "ha9rhcre");

    if (mysqli_connect_errno()) {
        $msg = "erreur " . mysqli_connect_error();
    } else {
        $msg = "connecté au serveur " . mysqli_get_host_info($conn);
        /*Sélection de la base de données*/
        mysqli_select_db($conn, "pruvostj");
        /*Encodage UTF8 pour les échanges avecla BD*/
        mysqli_query($conn, "SET NAMES UTF8");
    }
    ?>

    <h1>Connexion à EtuServices</h1>
    <form action="/login" method="post">
        <label for="username">eMail:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password">
        <br>
        <?php
        /*Mettre le script*/
        ?>
        <button>
            <a href="accueil.php">Connexion</a>
        </button>
    </form>
</body>

</html>