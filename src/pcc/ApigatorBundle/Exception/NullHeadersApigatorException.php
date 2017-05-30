<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 31/5/17
 * Time: 0:13
 */

namespace pcc\ApigatorBundle\Exception;


use Throwable;

class NullHeadersApigatorException extends ApigatorException
{
    public function __construct($message = "sobreescritas las headers por defecto con unas NULL", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}