<?php

interface ITransport {

    public function ready() : void;
    public function dispatch() : void;
    public function deliver(): void;
    
}
?>