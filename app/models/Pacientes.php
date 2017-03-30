<?php

class Pacientes extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=1, nullable=true)
     */
    protected $sexo;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $fecha_nacimiento;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $peso;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $estatura;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $nacionalidad;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $historia_clinica;

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
     * Method to set the value of field sexo
     *
     * @param string $sexo
     * @return $this
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Method to set the value of field fecha_nacimiento
     *
     * @param string $fecha_nacimiento
     * @return $this
     */
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

        return $this;
    }

    /**
     * Method to set the value of field peso
     *
     * @param integer $peso
     * @return $this
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Method to set the value of field estatura
     *
     * @param integer $estatura
     * @return $this
     */
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;

        return $this;
    }

    /**
     * Method to set the value of field nacionalidad
     *
     * @param string $nacionalidad
     * @return $this
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Method to set the value of field historia_clinica
     *
     * @param string $historia_clinica
     * @return $this
     */
    public function setHistoriaClinica($historia_clinica)
    {
        $this->historia_clinica = $historia_clinica;

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
     * Returns the value of field sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Returns the value of field fecha_nacimiento
     *
     * @return string
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Returns the value of field peso
     *
     * @return integer
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Returns the value of field estatura
     *
     * @return integer
     */
    public function getEstatura()
    {
        return $this->estatura;
    }

    /**
     * Returns the value of field nacionalidad
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Returns the value of field historia_clinica
     *
     * @return string
     */
    public function getHistoriaClinica()
    {
        return $this->historia_clinica;
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
        return 'pacientes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pacientes[]|Pacientes
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pacientes
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
            'sexo' => 'sexo',
            'fecha_nacimiento' => 'fecha_nacimiento',
            'peso' => 'peso',
            'estatura' => 'estatura',
            'nacionalidad' => 'nacionalidad',
            'historia_clinica' => 'historia_clinica'
        ];
    }

}
