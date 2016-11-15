<?php


namespace ApiGator;

/**
 * Crea una Conexión con "curl.php" a una API REST, tras ello pone a 
 * disposición del usuario , tanto la response como un método específico
 * para procesarla según se prefiera.
 * 
 * @see http://stackoverflow.com/questions/2140419/how-do-i-make-a-request-using-http-basic-authentication-with-php-curl
 */
class ApiGator {
	
	/**
	 * @var resource
	 * @see http://php.net/manual/es/resource.php
	 */
	public $Ch;
	public $CurlResponse;

	/**
	 *
	 * @var type La uri de la api.
	 */
	private $Uri;
	private $Username;
	private $password; 
	private	$additionalHeaders;
	private	$payloadName;
	//todo private $ApplicationType;  

	/**
	 * 
	 * TODO: documenta
	 */
	public function __construct($uri, $username, $password, $additionalHeaders =null, $payloadName = null) {

	
		$this->Ch = curl_init($uri);
		curl_setopt($this->Ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml', $additionalHeaders));
		curl_setopt($this->Ch, CURLOPT_HEADER, 1);
		curl_setopt($this->Ch, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($this->Ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($this->Ch, CURLOPT_POST, 1);
		curl_setopt($this->Ch, CURLOPT_POSTFIELDS, $payloadName);
		curl_setopt($this->Ch, CURLOPT_RETURNTRANSFER, TRUE);

		//miCurlExec() obtenemos response .
		$this->CurlResponse = curl_exec($this->Ch);
		if ($this->CurlResponse === false) {
			$info = curl_error($this->Ch);
			curl_close($this->Ch) && die("Error en curl_exec(): " . var_export($info));
		}
	}

	public function __destruct() {
		curl_close($this->Ch);
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
		$f($this->CurlResponse);
	}

}
