<?php

class Citas extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $pacientes_id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $motivos;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $fecha_hora;

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
     * Method to set the value of field pacientes_id
     *
     * @param integer $pacientes_id
     * @return $this
     */
    public function setPacientesId($pacientes_id)
    {
        $this->pacientes_id = $pacientes_id;

        return $this;
    }

    /**
     * Method to set the value of field motivos
     *
     * @param string $motivos
     * @return $this
     */
    public function setMotivos($motivos)
    {
        $this->motivos = $motivos;

        return $this;
    }

    /**
     * Method to set the value of field fecha_hora
     *
     * @param string $fecha_hora
     * @return $this
     */
    public function setFechaHora($fecha_hora)
    {
        $this->fecha_hora = $fecha_hora;

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
     * Returns the value of field pacientes_id
     *
     * @return integer
     */
    public function getPacientesId()
    {
        return $this->pacientes_id;
    }

    /**
     * Returns the value of field motivos
     *
     * @return string
     */
    public function getMotivos()
    {
        return $this->motivos;
    }

    /**
     * Returns the value of field fecha_hora
     *
     * @return string
     */
    public function getFechaHora()
    {
        return $this->fecha_hora;
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
        return 'citas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Citas[]|Citas
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Citas
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
            'pacientes_id' => 'pacientes_id',
            'motivos' => 'motivos',
            'fecha_hora' => 'fecha_hora',
            'estatus' => 'estatus'
        ];
    }

}
