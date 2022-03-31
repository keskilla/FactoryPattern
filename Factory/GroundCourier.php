<?php 

//require('Courier.php');
//require('ITransport.php');
//require('Truck.php');

class GroundCourier extends Courier {
  
    function getCourierTransport(): ITransport {
        return new Truck();
    }
}
?>