<?php
$client = new SoapClient("greetings.wsdl", array(
        'trace' => 1, 
        'exceptions' => true, 
        'cache_wsdl' => WSDL_CACHE_NONE, 
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
));
print_r($client->__getFunctions());

try {
    print_r($methodresult = $client->sayHello('jozek'));  
}  catch (Exception $e){
    echo "Error:<br/>";
    var_dump($e);
    $x = $client->__getLastRequest();
    var_dump($x);
}