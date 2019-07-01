<?php

class CustomerRepostoryTest extends PHPUnit\Framework\TestCase {

    protected $customers;

    public function setUp(){

        $this->customers = new CustomerRepository([
            new Customer('gold'),
            new Customer('silver'),
            new Customer('bronse'),
            new Customer('gold')
        ]);
    }

    function testFetchAllCustomers() {

        $results = $this->customers->all();
        $this->assertCount(4, $results);

    }
    
    function testFtchesAllCustomersWhoMatchGivenSpecification() {

        $specification = new CustomerIsGold;

        $results = $this->customers->matchingSpecification($specification);
        $this->assertCount(2, $results);

    }
}
