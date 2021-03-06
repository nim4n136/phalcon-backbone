<?php

namespace Pbackbone\Model;

/**
 * RobotModel
 * @package Pbackbone\Models
 * @autogenerated by Phalcon Developer Tools
 * @date 2020-03-12, 06:15:34
 */
class RobotModel extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=10, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(column="created_at", type="string", nullable=true)
     */
    protected $createdAt;

    /**
     *
     * @var string
     * @Column(column="updated_at", type="string", nullable=true)
     */
    protected $updatedAt;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=50, nullable=true)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(column="description", type="string", length=100, nullable=true)
     */
    protected $description;

    /**
     *
     * @var integer
     * @Column(column="year", type="integer", length=10, nullable=true)
     */
    protected $year;

    /**
     *
     * @var integer
     * @Column(column="type_id", type="integer", length=10, nullable=true)
     */
    protected $typeId;

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
     * Method to set the value of field created_at
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Method to set the value of field updated_at
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field year
     *
     * @param integer $year
     * @return $this
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Method to set the value of field type_id
     *
     * @param integer $typeId
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

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
     * Returns the value of field createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Returns the value of field updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Returns the value of field typeId
     *
     * @return integer
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon-backbone");
        $this->setSource("robot");

        $this->hasMany(
            'id',
            'Pbackbone\Model\RobotPart',
            'robotId',
            [
                'alias' => 'RobotPart',
                'reusable' => true,
                'foreignKey' => [
                    'message' => 'data still being used',
                ],
            ]
        );

        $this->belongsTo(
            'typeId',
            'Pbackbone\Model\Type',
            'id',
            [
                'alias' => 'Type',
                'reusable' => true,
                'foreignKey' => [
                    'allowNulls' => true,
                    'message' => "relation id doesn't exist",
                ],
            ]
        );
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RobotModel[]|RobotModel|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RobotModel|\Phalcon\Mvc\Model\ResultInterface
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
            'created_at' => 'createdAt',
            'updated_at' => 'updatedAt',
            'name' => 'name',
            'description' => 'description',
            'year' => 'year',
            'type_id' => 'typeId'
        ];
    }
}
