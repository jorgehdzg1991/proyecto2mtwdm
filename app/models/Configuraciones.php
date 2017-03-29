<?php

class Configuraciones extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $biografia;

    /**
     *
     * @var double
     * @Column(type="double", nullable=true)
     */
    protected $precio_cita;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $duracion_cita;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field biografia
     *
     * @param string $biografia
     * @return $this
     */
    public function setBiografia($biografia)
    {
        $this->biografia = $biografia;

        return $this;
    }

    /**
     * Method to set the value of field precio_cita
     *
     * @param double $precio_cita
     * @return $this
     */
    public function setPrecioCita($precio_cita)
    {
        $this->precio_cita = $precio_cita;

        return $this;
    }

    /**
     * Method to set the value of field duracion_cita
     *
     * @param integer $duracion_cita
     * @return $this
     */
    public function setDuracionCita($duracion_cita)
    {
        $this->duracion_cita = $duracion_cita;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field biografia
     *
     * @return string
     */
    public function getBiografia()
    {
        return $this->biografia;
    }

    /**
     * Returns the value of field precio_cita
     *
     * @return double
     */
    public function getPrecioCita()
    {
        return $this->precio_cita;
    }

    /**
     * Returns the value of field duracion_cita
     *
     * @return integer
     */
    public function getDuracionCita()
    {
        return $this->duracion_cita;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_plannerdoc");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'configuraciones';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Configuraciones[]|Configuraciones
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Configuraciones
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'biografia' => 'biografia',
            'precio_cita' => 'precio_cita',
            'duracion_cita' => 'duracion_cita'
        ];
    }

}
