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
	 * El resource que devuelve El curl_init(uri) 
	 * 
	 * @var resource
	 * @see http://php.net/manual/es/resource.php
	 */
	private $Ch;

	/**
	 * Lo que nos devuelve Curl cuando le hacemos
	 * curl_exec()
	 * @var json http_response mixed $CurlResponse
	 */
	private $CurlResponse;

	/**
	 * URI GUELERRRRRRRR.
	 * @var type La uri de la api.
	 * @see https://www.youtube.com/watch?v=VOakvXIVUvo 
	 */
	private $Uri;

	/**
	 * Headers personalizadas de las Request . 
	 * @var array Con las http headers oficiales.
	 */
	private $HttpHeader;
	

	/**
	 * Por ahora ni se ha usado . Las autentificaciones o las he hecho
	 * en la Uri concatenando un API token , o en el header. 
	 * las dejo por si alguna vez hacen falta.
	 * 
	 * @var string 
	 */
	private $Username;

	/**
	 * Por ahora ni se ha usado . Las autentificaciones o las he hecho
	 * en la Uri concatenando un API token , o en el header. 
	 * las dejo por si alguna vez hacen falta.
	 * 
	 * @var string 
	 */
	private $Password;

	public function setHttpHeader($HttpHeader) {
		$this->HttpHeader = $HttpHeader;
		$this->curlSETOPTS; 
		return $this;
	}

	public function setUsername($Username) {
		$this->Username = $Username;
		return $this;
	}

	public function setPassword($Password) {
		$this->Password = $Password;
		return $this;
	}

	
	
	/**
	 * El resource que devuelve El curl_init(uri) 
	 * 
	 * @var resource
	 * @see http://php.net/manual/es/resource.php
	 */
	public function getCh() {
		return $this->Ch;
	}

	/**
	 * Ejecuta curl_exec y devuelve la response.
	 * @return CurlResponse o directamente muere.
	 * 
	 */
	public function getCurlResponse() {
		//TODO: VERIFICAR QUE LA URI ESTA PUESTA SI NO TRHOW
		if (isset($this->Uri)) {
			return $this->curlEXEC();
		}
		
	}

	public function getUri() {
		return $this->Uri;
	}

	public function setUri($uri) {
		$this->curlINIT($uri);
		$this->curlSETOPTS();
		return $this;
	}

	public function getUsername() {
		return $this->Username;
	}

	public function getPassword() {
		return $this->Password;
	}

	/**
	 * Initializes the Apigator , an encapsulation of CURL client 4 extract data of an Api
     * Gigen a $uri we get a Response from the server returns the raw Response from the server.
	 */
	public function __construct($uri = null , $HttpCustomHeaders = null) {
		$this->Uri = $uri;
		$this->HttpHeader = $HttpCustomHeaders;

		$this->curlINIT($this->Uri);
		$this->curlSETOPTS();
	}

	private function curlINIT($uri) {
		$this->Ch = curl_init($uri);
		return $this->Ch;
	}

	private function curlSETOPTS() {
		curl_setopt($this->Ch, CURLOPT_HTTPHEADER, $this->HttpHeader);
		curl_setopt($this->Ch, CURLOPT_HEADER, 0); //no queremos el header en la response.
		//curl_setopt($this->Ch, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($this->Ch, CURLOPT_TIMEOUT, 50);

		curl_setopt($this->Ch, CURLOPT_CUSTOMREQUEST, "GET"); //gracias stackoverflow

		curl_setopt($this->Ch, CURLOPT_POST, true);
		//todo: parametrizame (payload)
		//  curl_setopt($this->Ch, CURLOPT_POSTFIELDS, 'key: value'); payload
		curl_setopt($this->Ch, CURLOPT_RETURNTRANSFER, TRUE);
	}

	private function curlEXEC() {
		//miCurlExec() obtenemos response la dejamos cargada
		$this->CurlResponse = curl_exec($this->Ch);

		if ($this->CurlResponse === false) {
			$info = curl_error($this->Ch);
			curl_close($this->Ch) && die("Error en curl_exec(): " . var_export($info));
		}
		return $this->CurlResponse;
	}

	public function __destruct() {
		if ($this->Ch !== NULL) {
			try {
				curl_close($this->Ch);
			} catch (ContextErrorException $e) {
				//todo: quitar echo
				echo "Apigator no puede Cerrar el Resource de Curl"; 
			}
		} else {
			//todo:quitar echo
			Echo "El Resource de Curl no existe!! así que no hay nada que cerrar"; 
		}
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
		$f($this->CurlResponse = $this->curlEXEC());
	}



}
