<?php

class Doctores extends \Phalcon\Mvc\Model
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
    protected $personas_id;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $especialidad;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $configuraciones_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $credenciales_id;

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
     * Method to set the value of field personas_id
     *
     * @param integer $personas_id
     * @return $this
     */
    public function setPersonasId($personas_id)
    {
        $this->personas_id = $personas_id;

        return $this;
    }

    /**
     * Method to set the value of field especialidad
     *
     * @param string $especialidad
     * @return $this
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Method to set the value of field configuraciones_id
     *
     * @param integer $configuraciones_id
     * @return $this
     */
    public function setConfiguracionesId($configuraciones_id)
    {
        $this->configuraciones_id = $configuraciones_id;

        return $this;
    }

    /**
     * Method to set the value of field credenciales_id
     *
     * @param integer $credenciales_id
     * @return $this
     */
    public function setCredencialesId($credenciales_id)
    {
        $this->credenciales_id = $credenciales_id;

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
     * Returns the value of field personas_id
     *
     * @return integer
     */
    public function getPersonasId()
    {
        return $this->personas_id;
    }

    /**
     * Returns the value of field especialidad
     *
     * @return string
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    /**
     * Returns the value of field configuraciones_id
     *
     * @return integer
     */
    public function getConfiguracionesId()
    {
        return $this->configuraciones_id;
    }

    /**
     * Returns the value of field credenciales_id
     *
     * @return integer
     */
    public function getCredencialesId()
    {
        return $this->credenciales_id;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_plannerdoc");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Doctores[]|Doctores
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Doctores
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
            'personas_id' => 'personas_id',
            'especialidad' => 'especialidad',
            'configuraciones_id' => 'configuraciones_id',
            'credenciales_id' => 'credenciales_id'
        ];
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'doctores';
    }

}
