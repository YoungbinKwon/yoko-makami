<?php

Class DatabaseManager
{
    public $mysql;

    public function __construct()
    {
        //local dev
        if(!isset($_ENV["VCAP_SERVICES"])) {
            $mysql_server_name = "us-cdbr-iron-east-03.cleardb.net";
            $mysql_username = "b5efbbb2d6ac89";
            $mysql_password = "564372a3";
            $mysql_database = "ad_b6ba698c9ca6080";
        //Bluemix
        } else {
            $vcap_services = json_decode($_ENV["VCAP_SERVICES" ]);
            //if "mysql" db service is bound to this application
            if ($vcap_services->{'mysql-5.5'}) { 
                $db = $vcap_services->{'mysql-5.5'}[0]->credentials;
            //if cleardb mysql db service is bound to this application
            } else if($vcap_services->{'cleardb'}) { 
                $db = $vcap_services->{'cleardb'}[0]->credentials;
            } else { 
                echo "Error: No suitable MySQL database bound to the application. <br>";
                die();
            }
            $mysql_database = $db->name;
            $mysql_port=$db->port;
            $mysql_server_name =$db->hostname . ':' . $db->port;
            $mysql_username = $db->username; 
            $mysql_password = $db->password;
        }

        $mysqli = new mysqli($mysql_server_name, $mysql_username, $mysql_password, $mysql_database);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            die();
        }
        $mysqli->set_charset("utf8");
        $this->mysql = $mysqli;
    }
}
