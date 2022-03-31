<?php 

class DbConnexion {

    private function __construct() {
        echo " New object created \n";
    }


    public static function getInstance() {
        static $instance = null;

        if (null == $instance) {
            $instance = new static();
        }else {
            echo "vous utilisez le même objet\n";
        }
        return $instance;
    }
}