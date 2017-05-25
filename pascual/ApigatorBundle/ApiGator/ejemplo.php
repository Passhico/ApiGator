<?php


include 'ApiGator.php';
use ApiGator\ApiGator;


/**
 * Ejemplos de uso Del ApiGator. 
 */

//si se llama sin nada carga por defecto: "application/status" como section
//Sería lo mismo que llamar a new ApiGator("application/status")
$apiExpress51status = new ApiGator();

//si llamamos al método 
$apiExpress51status->procesaResponse();
//sería lo mismo que llamar a : 
$apiExpress51status->procesaResponseCon('print_r');

/* Así , lo único que hay que hacer es implementar una
 * función que sepa procesar un formato json decodificado:
 * del estilo . 
 * stdClass Object
(
    [response] => stdClass Object
        (
            [liveagentversion] => 4.42.1.2
            [gpfversion] => 1.9.36
            [dateinstalled] => 2016-05-01 03:30:56
            [datelatestupdate] => 2016-11-03 08:09:18
            [current_server_time] => 2016-11-12 11:06:27
        )

)
 */

/* Lo voy a implementar con una closure , así que lo único que necesito
 * ya es esta función que persista los datos en la DDBB sin necesidad
 * de tocar o tener que heredar la clase. 
 * 
 * http://php.net/manual/en/functions.anonymous.php 
 * http://php.net/manual/es/class.closure.php
 */
$funcionQueSabeLoQueHacerConElJSON = function ($RespuestaDeCurlYaProcesada)
{
	 /*Crear los objetos en la base de datos para que se puedan exportar a Qlick*/
	 var_dump($RespuestaDeCurlYaProcesada);
};


/*
 * Podemos extraer datos fácilmente de cualquier sección de la API, y simplemente
 * crear la función que más nos interese para cada una.
 */
$apiExpress51conversaciones = new ApiGator(SECTION_CONVERSACIONES);
$apiExpress51conversaciones->procesaResponseCon($funcionQueSabeLoQueHacerConElJSON);

$apiExpress51companies = new ApiGator("companies");
$apiExpress51companies->procesaResponseCon($funcionQueSabeLoQueHacerConElJSON);




