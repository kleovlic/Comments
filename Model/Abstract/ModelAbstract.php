<?php


class ModelAbstract
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @param integer $id
     */
    public function setId(integer $id)
    {
        $this->id = $id;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}