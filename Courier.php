<?php

//require('ITransport.php');

abstract class Courier {

    //factory method
    abstract function getCourierTransport() : ITransport;

    public function sendCourier() {
        $transport = $this->getCourierTransport();
        $transport->ready();
        $transport->dispatch();
        $transport->deliver();
    }
}
?>