<?php

try {


        $params = array(
                'location' => 'https://soap-automoviles.herokuapp.com/service-automoviles-auth.php',
                'uri' => 'https://soap-automoviles.herokuapp.com/',
                'trace' => 1
        );

        $client = new SoapClient(NULL, $params);

        //set the header
        $auth_params = new stdClass();
        $auth_params->username = 'ies';
        $auth_params->password = 'daw';

        $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);

        $header = new SoapHeader('https://soap-automoviles.herokuapp.com/', 'authenticate', $header_params, false);
        $client->__setSoapHeaders(array($header));
        
} catch (\Throwable $th) {
        echo "<script> alert('error'); </script>";
}
