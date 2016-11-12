<?php


/**
 * Crea una Conexión con curl.php a una API rest, tras ello pone a 
 * disposición del usuario , tanto la response como un método específico
 * para procesarla según se prefiera.
 */
namespace ApiGator;


define('SECTION_CONVERSACIONES', "conversations");


/**
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
	

	/* Con estas 3 tenemos que formar la URI
	 * FORMATO de ejemplo:
	 * http://exp.com/api/conversations?&apikey=value
	 * se encarga generateUri()
	 * */
	private $apikey;
	private $url;
	private $section;
	private $uri;
	/**
	 * 
	 * @param SeccionDeLaApi $section 
	 * @param URL $url
	 * @param string $apikey
	 */
	public function __construct( $section = "application/status", $url = 'https://express51.ladesk.com/api/', $apikey = '10c54076befac3d7ba249637b9ee6a31') {

		$this->url = $url;
		$this->apikey = $apikey;
		
		$this->section =$section;
		
		//Generamos la URI e iniciamos curl. cargamos ch 
		echo "Obteniendo: " . ($this->ch = curl_init($this->generateUri()) ) . PHP_EOL;

		//seteamos la opción especial.
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);

		//obtenemos response .
		$this->curl_response = curl_exec($this->ch);
		if ($this->curl_response === false) {
			$info = curl_error($this->ch);
			curl_close($this->ch) && die("Error en curl_exec(): " . var_export($info));
		}
	}

	private function generateUri() {
		echo "generteUri(): " . ($this->uri = $this->url . $this->section . '?&apikey=' . $this->apikey) . PHP_EOL;
		return $this->uri;
	}

	public function __destruct() {
		curl_close($this->ch);
	}

	/**
	 * 
	 * @param function $f Donde $f es una función f( json_decode(response) )
	 * 
	 */
	public function procesaResponsecon($f = 'print_r') {
		$f(json_decode($this->curl_response));
	}
	
	/**
	 * Es solo un alias de procesaResponseCon()
	 * para tener una salida directa a terminal 
	 * por defecto.
	 */
	public function procesaResponse()
	{
		$this->procesaResponsecon();
	}

}



/**
 * Ejemplos de uso Del ApiGator. 
 */

//si se llama sin nada carga por defecto: "application/status" como section
//Sería lo mismo que llamar a new ApiGator("application/status")
$apiExpress51status = new ApiGator();

//si llamamos al método 
$apiExpress51status->procesaResponse();
//sería lo mismo que llamar a : 
$apiExpress51status->procesaResponsecon('print_r');

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
$apiExpress51conversaciones->procesaResponsecon($funcionQueSabeLoQueHacerConElJSON);

$apiExpress51companies = new ApiGator("companies");
$apiExpress51companies->procesaResponsecon($funcionQueSabeLoQueHacerConElJSON);



