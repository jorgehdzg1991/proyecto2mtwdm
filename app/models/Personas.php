<?php

class Personas extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=45, nullable=true)
     */
    protected $nombre;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $apellido_paterno;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $apellido_materno;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $telefono;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=true)
     */
    protected $correo;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $fecha_registro;

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
     * Method to set the value of field nombre
     *
     * @param string $nombre
     * @return $this
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Method to set the value of field apellido_paterno
     *
     * @param string $apellido_paterno
     * @return $this
     */
    public function setApellidoPaterno($apellido_paterno)
    {
        $this->apellido_paterno = $apellido_paterno;

        return $this;
    }

    /**
     * Method to set the value of field apellido_materno
     *
     * @param string $apellido_materno
     * @return $this
     */
    public function setApellidoMaterno($apellido_materno)
    {
        $this->apellido_materno = $apellido_materno;

        return $this;
    }

    /**
     * Method to set the value of field telefono
     *
     * @param string $telefono
     * @return $this
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Method to set the value of field correo
     *
     * @param string $correo
     * @return $this
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Method to set the value of field fecha_registro
     *
     * @param string $fecha_registro
     * @return $this
     */
    public function setFechaRegistro($fecha_registro)
    {
        $this->fecha_registro = $fecha_registro;

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
     * Returns the value of field nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Returns the value of field apellido_paterno
     *
     * @return string
     */
    public function getApellidoPaterno()
    {
        return $this->apellido_paterno;
    }

    /**
     * Returns the value of field apellido_materno
     *
     * @return string
     */
    public function getApellidoMaterno()
    {
        return $this->apellido_materno;
    }

    /**
     * Returns the value of field telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Returns the value of field correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Returns the value of field fecha_registro
     *
     * @return string
     */
    public function getFechaRegistro()
    {
        return $this->fecha_registro;
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
        return 'personas';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Personas[]|Personas
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Personas
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
            'nombre' => 'nombre',
            'apellido_paterno' => 'apellido_paterno',
            'apellido_materno' => 'apellido_materno',
            'telefono' => 'telefono',
            'correo' => 'correo',
            'fecha_registro' => 'fecha_registro',
            'estatus' => 'estatus'
        ];
    }

}
