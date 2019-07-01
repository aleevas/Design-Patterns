<?php

class CustomerRepository {

    protected $customers;

    public function __construct($customers){

        $this->customers = $customers;
    }
    
    public function matchingSpecification($specification) {

        $matches = [];

        foreach ($this->customers as $customer) {

            if ($specification->isSatisfiedBy($customer)) {

                $matches[] = $customer;
            }
        }
        return array_filter($this->customers, [$specification, 'isSatisfiedBy']);

    
    }

    public function all(){

        return $this->customers;
    }
}
