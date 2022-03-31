<?php

//client
interface Share {
    //request
    public function shareData();
}

// le service à adapter
class WhatsAppShare {

    public function waShare(String $string) {
        echo "mon partage via WhatsApp:'$string' \n";
    }
}

//l'adaptateur : la classe à adapter implémente l'interface

class WhatsAppShareAdapter implements Share {

    private $whatsapp;
    private $data;

    public function __construct(WhatsAppShare $whatsapp, String $data) {
        $this->whatsapp = $whatsapp;
        $this->data = $data;
    }

    public function shareData() {
        $this->whatsapp->waShare($this->data);
    }
}

function clientCode(Share $share) {
    $share->shareData();
}

$wa = new WhatsAppShare();
$wa->waShare('adaptateur: OFF');
$waShare = new WhatsAppShareAdapter($wa, "adaptateur whatsApp: ON");
clientCode($waShare);


