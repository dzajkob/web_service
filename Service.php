<?php
function sayHello($name){
    $salutation = "dzialam : $name";
    return $salutation;
}

$server = new SoapServer('greetings.wsdl');
$server->addFunction("sayHello");
$server->handle();