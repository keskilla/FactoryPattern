<?php

//require('ITransport.php');

class Plane implements ITransport {

    public function ready(): void {
        echo "Courrier est prêt à partir par avion\n";
    }

    public function dispatch(): void {
        echo "Courrier est trié par avion\n";
    }

    public function deliver(): void {
        echo "Courrier vous a été délivré par avion\n";
    }
    
}