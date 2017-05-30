<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 31/5/17
 * Time: 1:07
 */

namespace pcc\ApigatorBundle\Exception;


use Throwable;

class NullMethodApigatorException extends ApigatorException
{

    public function __construct($message = "El método por defecto GET ha sido sobrescrito por NULL", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}