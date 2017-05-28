<?php

namespace pcc\WebBundle\Entity;

/**
 * Measure
 */
class Measure
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dt = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var string
     */
    private $pressure;

    /**
     * @var \pcc\WebBundle\Entity\City
     */
    private $idCity;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dt
     *
     * @param \DateTime $dt
     *
     * @return Measure
     */
    public function setDt($dt)
    {
        $this->dt = $dt;

        return $this;
    }

    /**
     * Get dt
     *
     * @return \DateTime
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return Measure
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set pressure
     *
     * @param string $pressure
     *
     * @return Measure
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;

        return $this;
    }

    /**
     * Get pressure
     *
     * @return string
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Set idCity
     *
     * @param \pcc\WebBundle\Entity\City $idCity
     *
     * @return Measure
     */
    public function setIdCity(\pcc\WebBundle\Entity\City $idCity = null)
    {
        $this->idCity = $idCity;

        return $this;
    }

    /**
     * Get idCity
     *
     * @return \pcc\WebBundle\Entity\City
     */
    public function getIdCity()
    {
        return $this->idCity;
    }
}

