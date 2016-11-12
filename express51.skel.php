<?php

include 'ApiGator.php';

use ApiGator\ApiGator;

/* TODO: STUB Preparamos la closure*/
$PersistConversaciones = function ($jsonDecodificado) {
	//implementación aquí:
	print_r($jsonDecodificado);
};

//Creamos el ApiGator de la sección que queramos y la closure se encarga de todo.
$apiExpress51_Conversaciones = new ApiGator(SECTION_CONVERSACIONES);
$apiExpress51_Conversaciones->procesaResponseCon($PersistConversaciones);



