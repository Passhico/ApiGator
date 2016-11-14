<?php

/**
 * Crea una Conexión con "curl.php" a una API REST, tras ello pone a 
 * disposición del usuario , tanto la response como un método específico
 * para procesarla según se prefiera.
 * 
 * 
 */
namespace ApiGator;

/**
 * 
 * 
 * @author Pascual Muñoz <pascual.munoz@pccomponentes.com>
 * @see https://support.ladesk.com/840770-Complete-API-reference#apiv1_agents
 * 
 */
class ApiGator {

	/**
	 * @var resource
	 * @see http://php.net/manual/es/resource.php
	 */
	public $ch;
	public $curl_response;

	/**
	 *
	 * @var type La uri de la api.
	 */
	private $uri;

	/**
	 *  http://stackoverflow.com/questions/2140419/how-do-i-make-a-request-using-http-basic-authentication-with-php-curl
	 * TODO: documenta
	 */
	public function __construct($uri, $username, $password, $additionalHeaders = null, $payloadName = null) {


		$this->ch = curl_init($uri);
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));
		curl_setopt($this->ch, CURLOPT_HEADER, 1);
		curl_setopt($this->ch, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($this->ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($this->ch, CURLOPT_POST, 1);
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $payloadName);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, TRUE);


		//miCurlExec() obtenemos response .
		$this->curl_response = curl_exec($this->ch);
		if ($this->curl_response === false) {
			$info = curl_error($this->ch);
			curl_close($this->ch) && die("Error en curl_exec(): " . var_export($info));
		}
	}

	public function __destruct() {
		curl_close($this->ch);
	}

	public function miCurlInit() {
		
	}

	/**
	 * Es una closure, para el procesado externo del json.
	 * Por supuesto , no hace falta usar esta tecnica y es posible usar 
	 * directamente el $this->curl_response si se prefiere.
	 * Ejemplo:
	 * 	  		$funcionDumpDeSymfony = function ($json) {
	 * 			//transformamos el json en un Array.
	 * 			$arr = json_decode($json, true);
	 * 			//si tenemos response que el array apunte a ella.
	 * 			$arr = $arr['response'] ? $arr['response'] : $arr;
	 *
	 * 		return new Response(dump($arr));
	 * 	};
	 * @param function $f Donde $f es una función que se encarga de procesar
	 * el json como el pamametro que recibe.
	 */
	public function procesaResponseCon($f = 'print_r') {
		$f($this->curl_response);
	}

}
