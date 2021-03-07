<?php
    include('./BDTools.php');

    if (!empty($_POST)) {
        $bdtools = new BDtools();

        if ($bdtools->getUsers($_POST['log'], $_POST['pass'])) {
            session_start();
            $_SESSION['log'] = $_POST['log'];
            $_SESSION['pass'] = $_POST['pass'];


            echo "session log ".$_SESSION['log'];
            header("location: afficheurMsg.php");
        } else
            echo "L'utilisateur ou la MDP n'est pas correcte;";


    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Afficheur de Messages</title>
    <meta charset="utf-8">
</head>

<body>
    <div class="loginForm">
    <form action="afficheurAccess.php" method="POST">
        <label for="util"> 
            Log : <input type="text" name="log" id="log">
        </label><br>
        <label for="pass"> 
            Pass: <input type="password" name="pass" id="pass">
        </label><br>

        <button type="submit">Log in</button>
        <button type="reset">Supprimer</button>
    </form>
    </div>
</body>

</html>