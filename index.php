<?php

require('GroundCourier.php');
require('AirCourier.php');
require('truck.php');
require('plane.php');

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

function deliverCourier(Courier $courier) {
    $courier->sendCourier();
}
  
echo "test du courrier par la terre \n";
deliverCourier(new GroundCourier());

echo "test du courrier par l'air \n";
deliverCourier(new AirCourier());