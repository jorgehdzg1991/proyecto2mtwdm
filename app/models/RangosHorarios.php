<?php

class RangosHorarios extends \Phalcon\Mvc\Model
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
    protected $horarios_id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $hora_inicio;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $hora_fin;

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
     * Method to set the value of field horarios_id
     *
     * @param integer $horarios_id
     * @return $this
     */
    public function setHorariosId($horarios_id)
    {
        $this->horarios_id = $horarios_id;

        return $this;
    }

    /**
     * Method to set the value of field hora_inicio
     *
     * @param string $hora_inicio
     * @return $this
     */
    public function setHoraInicio($hora_inicio)
    {
        $this->hora_inicio = $hora_inicio;

        return $this;
    }

    /**
     * Method to set the value of field hora_fin
     *
     * @param string $hora_fin
     * @return $this
     */
    public function setHoraFin($hora_fin)
    {
        $this->hora_fin = $hora_fin;

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
     * Returns the value of field horarios_id
     *
     * @return integer
     */
    public function getHorariosId()
    {
        return $this->horarios_id;
    }

    /**
     * Returns the value of field hora_inicio
     *
     * @return string
     */
    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    /**
     * Returns the value of field hora_fin
     *
     * @return string
     */
    public function getHoraFin()
    {
        return $this->hora_fin;
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
        return 'rangos_horarios';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RangosHorarios[]|RangosHorarios
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RangosHorarios
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
            'horarios_id' => 'horarios_id',
            'hora_inicio' => 'hora_inicio',
            'hora_fin' => 'hora_fin'
        ];
    }

}
