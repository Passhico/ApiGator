<?php

include '/ApiGatorExpress51.php';

use ApiGator\ApiGato;


/* TODO: Preparamos la closure(http://php.net/manual/es/functions.anonymous.php)
 *  que maneja la response de curl */
/* @var $PersistConversaciones Closure */
$PersistConversaciones = function ($json) {
	//implementación aquí:
	var_dump(json_decode($json));
};

//Creamos el ApiGator de la sección que queramos y la closure se encarga de todo.
$apiExpress51_Conversaciones = new ApiGator(SECTION_CONVERSACIONES);
$apiExpress51_Conversaciones->procesaResponseCon($PersistConversaciones);

