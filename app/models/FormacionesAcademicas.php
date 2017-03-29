<?php

class FormacionesAcademicas extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $doctores_id;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $titulo_obtenido;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $universidad;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $anio;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $cedula;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    protected $estatus;

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
     * Method to set the value of field doctores_id
     *
     * @param integer $doctores_id
     * @return $this
     */
    public function setDoctoresId($doctores_id)
    {
        $this->doctores_id = $doctores_id;

        return $this;
    }

    /**
     * Method to set the value of field titulo_obtenido
     *
     * @param string $titulo_obtenido
     * @return $this
     */
    public function setTituloObtenido($titulo_obtenido)
    {
        $this->titulo_obtenido = $titulo_obtenido;

        return $this;
    }

    /**
     * Method to set the value of field universidad
     *
     * @param string $universidad
     * @return $this
     */
    public function setUniversidad($universidad)
    {
        $this->universidad = $universidad;

        return $this;
    }

    /**
     * Method to set the value of field anio
     *
     * @param integer $anio
     * @return $this
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Method to set the value of field cedula
     *
     * @param string $cedula
     * @return $this
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Method to set the value of field estatus
     *
     * @param string $estatus
     * @return $this
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

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
     * Returns the value of field doctores_id
     *
     * @return integer
     */
    public function getDoctoresId()
    {
        return $this->doctores_id;
    }

    /**
     * Returns the value of field titulo_obtenido
     *
     * @return string
     */
    public function getTituloObtenido()
    {
        return $this->titulo_obtenido;
    }

    /**
     * Returns the value of field universidad
     *
     * @return string
     */
    public function getUniversidad()
    {
        return $this->universidad;
    }

    /**
     * Returns the value of field anio
     *
     * @return integer
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Returns the value of field cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Returns the value of field estatus
     *
     * @return string
     */
    public function getEstatus()
    {
        return $this->estatus;
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
        return 'formaciones_academicas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return FormacionesAcademicas[]|FormacionesAcademicas
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return FormacionesAcademicas
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
            'doctores_id' => 'doctores_id',
            'titulo_obtenido' => 'titulo_obtenido',
            'universidad' => 'universidad',
            'anio' => 'anio',
            'cedula' => 'cedula',
            'estatus' => 'estatus'
        ];
    }

}
