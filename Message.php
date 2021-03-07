<?php
    class Message {
        private $nom;
        private $entreprise;
        private $tel;
        private $e_mail;
        private $msg;
        private $nouvelle; /* 1 = true -- 0 = false*/

        function __construct ($nom, $entreprise, $tel, $e_mail, $msg) {
            $this->nom = $nom;
            $this->entreprise = $entreprise;
            $this->tel =  $tel;
            $this->e_mail = $e_mail;
            $this->msg = $msg;
            $this->nouvelle = 1;
        }

        function getNom(){ return $this->nom; }

        function getEntreprise() { return $this->entreprise; }

        function getTel(){ return $this->tel; }

        function getEmail(){ return $this->e_mail; }

        function getMessage(){ return $this->msg; }

        function getNouvelle() { return $this->nouvelle; }

        static function creerMessage() {
            /*$msg = $_POST["msg"];*/
            return new Message($_POST["nom"], $_POST["enterprise"], ($_POST["tel"]), $_POST["e_mail"], $_POST["msg"]);
        }
    }


?>