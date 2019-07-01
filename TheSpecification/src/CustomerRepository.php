<?php

class CustomerRepository {

    protected $customers;

    public function __construct($customers){

        $this->customers = $customers;
    }
    
    public function matchingSpecification($specification) {

        $matches = [];

        foreach ($this->customers as $customer) {

            if ($specification->isSatisfyedBy($customer)) {

                $matches[] = $customer;
            }
        }
        
        return $matches;
    
    }

    public function all(){

        return $this->customers;
    }
}
