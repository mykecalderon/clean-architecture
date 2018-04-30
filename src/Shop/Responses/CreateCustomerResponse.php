<?php

namespace Shop\Responses;

class CreateCustomerResponse
{
    protected $id;
    protected $created;

    /**
     * Class Constructor
     * @param    $id   
     * @param    $created   
     */
    public function __construct($id, $created)
    {
        $this->id = $id;
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function isCreated()
    {
        return $this->created;
    }
}