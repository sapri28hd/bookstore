<?php
    class db{
        private $db;
        private $debug;
        function __construct($user,$pass,$dbname,$debug){
            $this->db = new mysqli("localhost",$user,$pass,$dbname);
            $this->db->set_charset("utf8");
            $this->debug = $debug;

            if($this->db->connect_errno){
                echo "Fail to connect to MySQL:".
                    $this->db->connect_error;
                exit();
            }
            else $this->debug_text("Connect Success");
        }

        function query($sql){
            $result = $this->db->query($sql);
            $this->debug_text($sql);
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }

        function close(){ 
            $this->db->close(); 
        }
        
        function debug_text($text){
            if($this->debug){
                echo "Debug:{$text}<br>";
            }
        }

    }
    
?>
