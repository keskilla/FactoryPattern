<?php

require('ITransport.php');

class Truck implements ITransport {
    
    public function ready(): void {
        echo "Courrier est prêt à partir par camion \n";
    }

    public function dispatch(): void {
        echo "Courrier est trié par camion\n";
    }

    public function deliver(): void {
        echo "Courrier vous a été délivré par camion\n";
    }
}