<?php
    include('Message.php');
    include('BDTools.php');
    
    $bdTools = new BDTools();
    /*$bdTools->getUsers();*/

    if (!empty($_POST)) {
        try {
            $msg = Message::creerMessage();
            $bdTools->sendMSG($msg);
        } catch (Exception $e) {
            //echo '<script> alert("Un erreur s\'est produit: '+$e->getMessage() +'.)</script>';
        }
        /*echo "<script> alert(`Message envoyé. Merci.`)</script>";*/
        $bdTools->killConn();
        $msg = null;

    } else
        //echo "<script> alert(`Pas de message.`)</script>";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>CV Julio Morais</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.8.0/js/all.js"></script>
        <script type="text/javascript" src="assets/funcJS.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body onload="countDown()">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Message envoyé! Merci</h1>
                <p class="lead">Vous serez reddirectioné à la page d'acceuil dans <span id="timer"></span> seconds... <br>
                    <a href="index.php">Cliquez ici pour retourner.</a>
                </p>
            </div>
        </div>
    </body>
</html>

