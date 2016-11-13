<?php

include 'ApiGator.php';

use ApiGator\ApiGator;


/* TODO: STUB Preparamos la closure que maneja la response de curl */
$PersistConversaciones = function ($json) {
	//implementación aquí:
	var_dump(json_decode($json));
};

//Creamos el ApiGator de la sección que queramos y la closure se encarga de todo.
$apiExpress51_Conversaciones = new ApiGator(SECTION_CONVERSACIONES);
$apiExpress51_Conversaciones->procesaResponseCon($PersistConversaciones);



