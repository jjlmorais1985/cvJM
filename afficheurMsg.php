<?php
    session_start();
    include "BDtools.php";
    include "Message.php";
    
    if (!empty($_SESSION)) {
        echo "Utilisateur: " . $_SESSION['log'] . "</br>";
        $bdTools = new BDTools();
        $bdTools->getAllMsg();
        echo "<br/><hr><br/>";
        /*$bdTools->getNvMsg();*/
    } else 
        header("location: afficheurAccess.php");

    session_destroy();
?>