<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 31/5/17
 * Time: 0:06
 */

namespace pcc\ApigatorBundle\Exception;


use Throwable;

class ApigatorException extends \Exception implements Throwable
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}