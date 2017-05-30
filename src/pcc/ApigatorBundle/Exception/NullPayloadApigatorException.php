<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 31/5/17
 * Time: 1:42
 */

namespace pcc\ApigatorBundle\Exception;


use Throwable;

class NullPayloadApigatorException extends \Exception
{
    public function __construct($message = "El payload que vas a enviar va a ser NULL!", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}