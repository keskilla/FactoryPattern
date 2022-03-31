<?php 

//require('Courier.php');
//require('ITransport.php');
//require('Plane.php');

class AirCourier extends Courier {
  
    function getCourierTransport(): ITransport {
        return new Plane();
    }
}
?>