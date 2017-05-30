<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 31/5/17
 * Time: 1:04
 */

namespace pcc\ApigatorBundle\Exception;


use Throwable;

class NullUriApigatorException extends ApigatorException
{
        public function __construct(
            $message = "No se puede usar un Apigator sin una URI a la que enviar la Request",
            $code = 0,
            Throwable $previous = null
        )
        {
            parent::__construct($message, $code, $previous);
        }
}