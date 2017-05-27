<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 27/5/17
 * Time: 17:39
 */

namespace pcc\WeatherBundle\Exceptions;


class WeatherProviderApiExceptionGetCelsiusOfNullCitie extends \Exception
{
    public function getMessage()
    {
        return "No se puede llamar a esta función con un null";
    }
}