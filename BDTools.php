<?php
    
    class BDTools {
        private $bdH;
        private $bdUtil;
        private $bdMDP;

        private $pdo = null;

        function __construct() {
            $this->bdUtil = "root";
            $this->bdMDP = "";
            $this->bdH = "mysql:host=localhost;dbname=cv-jm;charset=utf8";
            /*$this->bdH = "mysql:host=localhost;dbname=id13856273_cvjm;"; */
        }   

        function getConn(){
            try {
                $conn = new PDO($this->bdH, $this->bdUtil, $this->bdMDP);
            } catch (Exception $e) {
                die('<script> alert("'. $e->getMessage().'");</script>');
            }
            return $conn;

        }
        function killConn(){
            return null;
        }

        function getUsers($log, $mdp){
            try {
                $conn = $this->getConn();
                $query = "SELECT * FROM utilisateur";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                $i = 0;

                foreach($result as $ligne) {
                    if ($ligne->nomUtil == $log || $ligne->mdpUtil = $mdp) 
                    return true;
                }

                if ($i == 0)
                    return false;           
            } catch (Exception $e) {
                die('<script> alert("'. $e->getMessage().'");</script>');
            }
            return false;
        }

        function sendMSG($msg) {
            try {
                $query = "INSERT INTO MESSAGES (nom, entreprise, tel, email, msg, nouvelle) 
                        values (?/*nom*/, ?/*ENtreprise*/, ?/*tel*/, ?/*email*/, ?/*message*/, ?/*nouvelle*/)";
                $conn = $this->getConn();
                $stmt = $conn->prepare($query);
                $stmt->execute(array(
                                    $msg->getNom(),
                                    $msg->getEntreprise(),
                                    $msg->getTel(),
                                    $msg->getEmail(),
                                    $msg->getMessage(),
                                    $msg->getNouvelle()
                ));               

            } catch (Exception $e) {
                die('<script> alert("'. $e->getMessage().'");</script>');
            }
        }

        /*à copier*/
        function getNvMsg(){

            echo "<h2>Affichage de nouvelles messages: </h2>";
            $query = "SELECT * FROM messages WHERE nouvelle = 1;";
            $conn = $this->getConn();
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $resultat = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            foreach($resultat as $message) {
                echo "<br/>";
                echo "Date: ".$message->date."<br/>";
                echo "Nom: ".$message->nom."<br/>";
                echo "Entreprise: ".$message->entreprise."<br/>";
                echo "Téléphone: ".$message->tel."<br/>";
                echo "E-mail: ".$message->email."<br/>";
                echo "Message: </br>".$message->msg."<br/>";
                echo "<br/><hr>";
                
            }
        }

        function getAllMsg(){
            echo "<h2>Affichage de toutes les messages: </h2>";
            $query = "SELECT * FROM messages";
            $conn = $this->getConn();
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $resultat = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            foreach($resultat as $message) {
                if ($message->nouvelle == 1) {
                    echo "<h5>Nouvelle</h5>";
                }
                echo "Date: ".$message->date."<br/>";
                echo "Nom: ".$message->nom."<br/>";
                echo "Entreprise: ".$message->entreprise."<br/>";
                echo "Téléphone: ".$message->tel."<br/>";
                echo "E-mail: ".$message->email."<br/>";
                echo "Message: </br>".$message->msg."<br/>";
                echo "<br/><hr>";
                
            }
        }
        /*à copier*/

        function printConInfo(){
            echo "Data Source: ". $this->bdH."<br/>";
            echo "User: ". $this->bdUtil."<br/>";
            echo "Password: ". $this->bdMDP."<br/>";
        }
    }
?>