<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 26/01/2018
 * Time: 01:20
 */

class mesesPagamento
{
    private $jan;
    private $fev;
    private $mar;
    private $abr;
    private $mai;
    private $jun;
    private $jul;
    private $ago;
    private $set;
    private $out;
    private $nov;
    private $dez;

    /**
     * mesesPagamento constructor.
     * @param $jan
     * @param $fev
     * @param $mar
     * @param $abr
     * @param $mai
     * @param $jun
     * @param $jul
     * @param $ago
     * @param $set
     * @param $out
     * @param $nov
     * @param $dez
     */
    public function __construct($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez)
    {
        $this->jan = $jan;
        $this->fev = $fev;
        $this->mar = $mar;
        $this->abr = $abr;
        $this->mai = $mai;
        $this->jun = $jun;
        $this->jul = $jul;
        $this->ago = $ago;
        $this->set = $set;
        $this->out = $out;
        $this->nov = $nov;
        $this->dez = $dez;
    }

    /**
     * @return mixed
     */
    public function getJan()
    {
        return $this->jan;
    }

    /**
     * @param mixed $jan
     */
    public function setJan($jan)
    {
        $this->jan = $jan;
    }

    /**
     * @return mixed
     */
    public function getFev()
    {
        return $this->fev;
    }

    /**
     * @param mixed $fev
     */
    public function setFev($fev)
    {
        $this->fev = $fev;
    }

    /**
     * @return mixed
     */
    public function getMar()
    {
        return $this->mar;
    }

    /**
     * @param mixed $mar
     */
    public function setMar($mar)
    {
        $this->mar = $mar;
    }

    /**
     * @return mixed
     */
    public function getAbr()
    {
        return $this->abr;
    }

    /**
     * @param mixed $abr
     */
    public function setAbr($abr)
    {
        $this->abr = $abr;
    }

    /**
     * @return mixed
     */
    public function getMai()
    {
        return $this->mai;
    }

    /**
     * @param mixed $mai
     */
    public function setMai($mai)
    {
        $this->mai = $mai;
    }

    /**
     * @return mixed
     */
    public function getJun()
    {
        return $this->jun;
    }

    /**
     * @param mixed $jun
     */
    public function setJun($jun)
    {
        $this->jun = $jun;
    }

    /**
     * @return mixed
     */
    public function getJul()
    {
        return $this->jul;
    }

    /**
     * @param mixed $jul
     */
    public function setJul($jul)
    {
        $this->jul = $jul;
    }

    /**
     * @return mixed
     */
    public function getAgo()
    {
        return $this->ago;
    }

    /**
     * @param mixed $ago
     */
    public function setAgo($ago)
    {
        $this->ago = $ago;
    }

    /**
     * @return mixed
     */
    public function getSet()
    {
        return $this->set;
    }

    /**
     * @param mixed $set
     */
    public function setSet($set)
    {
        $this->set = $set;
    }

    /**
     * @return mixed
     */
    public function getOut()
    {
        return $this->out;
    }

    /**
     * @param mixed $out
     */
    public function setOut($out)
    {
        $this->out = $out;
    }

    /**
     * @return mixed
     */
    public function getNov()
    {
        return $this->nov;
    }

    /**
     * @param mixed $nov
     */
    public function setNov($nov)
    {
        $this->nov = $nov;
    }

    /**
     * @return mixed
     */
    public function getDez()
    {
        return $this->dez;
    }

    /**
     * @param mixed $dez
     */
    public function setDez($dez)
    {
        $this->dez = $dez;
    }




}