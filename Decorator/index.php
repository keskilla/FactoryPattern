<?php 

interface Pizza {
    public function getDesc() : String; // une description
    public function cost() : float; // un prix
}

class Margherita implements Pizza {
    public function getDesc(): String {
        return "Margherita \n";
    }

    public function cost(): float {
        return 6;
    }
}

class Orientale implements Pizza {
    public function getDesc(): String {
        return "Orientale \n";
    }

    public function cost(): float {
        return 8;
    }
}


// décorator 

class PizzaSupplement implements Pizza {

    protected $pizza;

    public function __construct(Pizza $pizza) {
        $this->pizza = $pizza;
    }

    public function getDesc(): string {
        return $this->pizza->getDesc();
    }

    public function cost(): float{
        return $this->pizza->cost();
    }
}

class ExtraCheese extends PizzaSupplement {

    public function getDesc(): string {
        return parent::getDesc() . "Supplément fromage \n ";
    }

    public function cost(): float {
        return parent::cost() +2.2;
    }

}

class ExtraHarissa extends PizzaSupplement {

    public function getDesc(): string {
        return parent::getDesc() . "Harissa \n ";
    }

    public function cost(): float {
        return parent::cost() +2.5;
    }

}

class ExtraOlives extends PizzaSupplement {

    public function getDesc(): string {
        return parent::getDesc() . "Olives \n ";
    }

    public function cost(): float {
        return parent::cost() +3;
    }

}

// client
function makePizza(Pizza $pizza) {
    echo "votre commande : \n----------------\n" . $pizza->getDesc() . "\n";
    echo "prix total :" . $pizza->cost()."€\n"; 
  
}

$pizza = new Margherita();
$pizza = new ExtraCheese($pizza);
$pizza = new ExtraHarissa($pizza);
$pizza = new ExtraOlives($pizza);

makePizza($pizza);

