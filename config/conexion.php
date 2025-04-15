<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                /* Localhost */
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=amazonexperience","root","");
                /* Produccion */
                /* $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=amazonexperience_helpdesk","dayer12392","Jnt80Bb5dhtm_"); */
                return $conectar;
            } catch (Exception $e) {
                print "!Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            /* Local */
            return "http://localhost:80/Personal_HelpdeskP/";
            /* Produccion */
            /* return "http://helpdesk.supportamazonexperience.com/"; */
        }
    }
?>
