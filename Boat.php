<?php

class Boat implements ITransport {

    public function ready(): void {
        echo "Courrier est prêt à partir par bâteau\n";
    }

    public function dispatch(): void {
        echo "Courrier est trié par bateau\n";
    }

    public function deliver(): void {
        echo "Courrier vous a été délivré par bateau\n";
    }
}