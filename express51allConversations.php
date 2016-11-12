
<?php

/**
 * 
 * DOCUMENTACIÓN DE LA API.
 * https://support.ladesk.com/840770-Complete-API-reference#apiv1_agents
 * 

 */


/*Con esto tenemos que formar la URI*/
$apikey = '10c54076befac3d7ba249637b9ee6a31';
$url = "https://express51.ladesk.com/api/";

$section = ["companies", "conversations", "application/status"];



echo "fetcheando: " . ($uri = $url.$section[2].'?&apikey='.$apikey) . PHP_EOL;
echo "Obteniendo: " . ($ch  = curl_init($uri) ). PHP_EOL;


curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$curl_response=curl_exec($ch);
if ($curl_response === false) {
    $info = curl_error($ch);
    curl_close($ch);
    die("Error en curl_exec(): " . var_export($info));
}
curl_close($ch);




