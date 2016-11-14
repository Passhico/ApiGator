<?php

/**
 * Crea una Conexión con curl.php a una API rest, tras ello pone a 
 * disposición del usuario , tanto la response como un método específico
 * para procesarla según se prefiera.
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
	 * 
	 * @param SeccionDeLaApi $section 
	 * @param URL $url
	 * @param string $apikey
	 */
	public function __construct($request_parameters = []) {

		
		$this->request_parameters = $request_parameters;

		
		$process = curl_init($host);
		curl_setopt($process, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));
		curl_setopt($process, CURLOPT_HEADER, 1);
		curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($process, CURLOPT_TIMEOUT, 30);
		curl_setopt($process, CURLOPT_POST, 1);
		curl_setopt($process, CURLOPT_POSTFIELDS, $payloadName);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		
		
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

	/**
	 * 
	 * @param function $f Donde $f es una función f( json_decode(response) )
	 * 
	 */
	public function procesaResponseCon($f = 'print_r') {
		$f($this->curl_response);
	}

	/**
	 * Es solo un alias de procesaResponseCon()
	 * para tener una salida directa a terminal 
	 * por defecto.
	 */
	public function procesaResponse() {
		$this->procesaResponseCon();
	}

}
