<?php


namespace pcc\ApigatorBundle;

use Symfony\Component\Config\Definition\Exception\Exception;

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
        private $currentUri;

        /**
         * Headers personalizadas de las Request .
         * @var array Con las http headers oficiales.
         */
        private $httpHeader;

        public function setHttpHeader($httpHeader) {
            $this->httpHeader = $httpHeader;
            $this->curlSETOPTS();
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
         * @return jsonResponse o directamente muere.
         *
         */
        public function getCurlResponse() {
            if (isset($this->currentUri)) {
                return $this->curlEXEC();
            } else {
              //  throw new \Exception('No deberías intentar obtener una response sin una URI , geller.');
            }

        }

        /**
         * Devuelve la respuesta en Json de la api decodificada como array .
         * @return mixed
         */
        public function getArrayResponse()
        {
            return json_decode($this->getCurlResponse(), true);
        }

        /**
         * Devuelve la respuesta de la api RAW como Json Decodificado
         * @return mixed
         */
        public function getJsonDecodedCurlResponse()
        {
            return json_decode($this->getCurlResponse());
        }

        public function getCurrentUri() {
            return $this->currentUri;
        }

        public function setCurrentUri($uri) {
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
         * ApiGator constructor.
         *
         * @param null $uri
         * @param null $httpCustomHeaders
         */
        public function __construct($uri = null , $httpCustomHeaders = null) {
            $this->setCurrentUri($uri);
            if(isset($httpCustomHeaders)){
                $this->httpHeader = $httpCustomHeaders;
            } else {
                $this->httpHeader = $this->getDefaultHeaders();
            }

            $this->curlINIT($this->currentUri);
            $this->curlSETOPTS();
        }

        public  function getDefaultHeaders()
        {
            $header[] = "Accept: application/json";
            $header[] = 'Content-Type: application/json';
            $header[] = 'Content-length: 0';

            return $header;
        }

        private function curlINIT($uri) {
            $this->Ch = curl_init($uri);
            $this->currentUri = $uri; //aquí se guarda currentUri , que no es la misma que la real de curl , la emula.
            return $this->Ch;
        }

        private function curlSETOPTS() {

            if(isset($this->httpHeader)) {
                curl_setopt($this->Ch, CURLOPT_HTTPHEADER, $this->httpHeader);
            } else {
                $this->httpHeader = $this->getDefaultHeaders();
                curl_setopt($this->Ch, CURLOPT_HTTPHEADER, $this->httpHeader);
            }

            /*
             * Ojo, $this->httpHeader no puede ser null nunca o lanzaría excepción.
             * Si no se settean en el constructor quedan las por defecto .
             *
                        $header[] = "Accept: application/json";
                		$header[] = 'Content-Type: application/json';
                		$header[] = 'Content-length: 0';
                     	$header[] = 'Authorization: ebec63f521baf484da13a550a111e5d6';
             */






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
         * @param closure $f Donde $f es una función que se encarga de procesar
         * el json como el pamametro que recibe.
         */
        public function procesaResponseCon($f = 'print_r') {
            $f($this->CurlResponse = $this->curlEXEC());
        }

    }
