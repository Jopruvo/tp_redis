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
        <label for="email">eMail:</label>
        <input type="text" id="email" name="email">
        <br>
        <label for="psw">Mot de passe:</label>
        <input type="password" id="psw" name="psw">
        <br>

        <?php
        if (isset($_GET["contenu"])) {
            if ($_GET["contenu"] == 1) {
                $sql = "SELECT email, mdp FROM Utilisateurs";
                $result = mysqli_query($conn, $sql);
            }
        }

        $result = $mysqli->query("SELECT email, mdp FROM Utilisateurs WHERE email = ?");
        if ($result->num_rows == 0) {
            if ($row = $result->fetch_assoc()) {
                $lec_email = $row['email'];
                $lec_mdp = $row['mdp'];
                echo "<button>
                <a href='accueil.php'>Connexion</a>
            </button>";
            }
        } else {
            echo "0 results";
        }
        ?>

    </form>
</body>

</html>