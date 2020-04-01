<?php

namespace Pbackbone\Model;

/**
 * RobotPartModel
 * @package Pbackbone\Models
 * @autogenerated by Phalcon Developer Tools
 * @date 2020-03-12, 06:15:37
 */
class RobotPartModel extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(column="robot_id", type="integer", length=10, nullable=true)
     */
    protected $robotId;

    /**
     *
     * @var integer
     * @Column(column="part_id", type="integer", length=10, nullable=true)
     */
    protected $partId;

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
     * Method to set the value of field robot_id
     *
     * @param integer $robotId
     * @return $this
     */
    public function setRobotId($robotId)
    {
        $this->robotId = $robotId;

        return $this;
    }

    /**
     * Method to set the value of field part_id
     *
     * @param integer $partId
     * @return $this
     */
    public function setPartId($partId)
    {
        $this->partId = $partId;

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
     * Returns the value of field robotId
     *
     * @return integer
     */
    public function getRobotId()
    {
        return $this->robotId;
    }

    /**
     * Returns the value of field partId
     *
     * @return integer
     */
    public function getPartId()
    {
        return $this->partId;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon-backbone");
        $this->setSource("robot_part");

        $this->belongsTo(
            'partId',
            'Pbackbone\Model\Part',
            'id',
            [
                'alias' => 'Part',
                'reusable' => true,
                'foreignKey' => [
                    'allowNulls' => true,
                    'message' => "relation id doesn't exist",
                ],
            ]
        );

        $this->belongsTo(
            'robotId',
            'Pbackbone\Models\Robot',
            'id',
            [
                'alias' => 'Robot',
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
     * @return RobotPartModel[]|RobotPartModel|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RobotPartModel|\Phalcon\Mvc\Model\ResultInterface
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
            'robot_id' => 'robotId',
            'part_id' => 'partId'
        ];
    }
}