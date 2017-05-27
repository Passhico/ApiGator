<?php
/**
 * Created by PhpStorm.
 * User: passh
 * Date: 27/5/17
 * Time: 11:22
 */

namespace pcc\WeatherBundle;


interface WeatherProviderInterface
{
    public function getMeasuresByCity($city);

}