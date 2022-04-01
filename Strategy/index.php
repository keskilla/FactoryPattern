<?php

//strategy interface
interface PaymentGateway {
    public function pay($amount);
}
// concrete strategy
class PaybyCB implements PaymentGateway {
    public function pay($amount) {
        echo "Payer ".$amount."€ par carte bancaire \n";
    }
}
//concrete strategy
class PaybyPaypal implements PaymentGateway {
    public function pay($amount) {
        echo "Payer ".$amount."€ via Paypal\n";
    }
}

// Context
class Order {

    private PaymentGateway $paiementGateway;

    public function setPaymentGateway(PaymentGateway $paiementGateway) {
        $this->paymentGateway = $paiementGateway;
    }

    public function pay($amount) {
        $this->paymentGateway->pay($amount);
    }
}

//client
$order = new Order();
$order->setPaymentGateway(new PayByCB());
$order->pay(198);

$order = new Order();
$order->setPaymentGateway(new PayByPaypal());
$order->pay(268);