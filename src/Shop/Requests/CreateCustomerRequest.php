<?php

namespace Shop\Requests;

interface CreateCustomerRequest
{
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getEmail();
}