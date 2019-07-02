<?php

class CustomerIsGoldTest extends PHPUnit\Framework\TestCase {
    
    function testIfCustomerHaveRespectiveType() {

        $specification = new CustomerIsGold;

        $goldCustomer = new Customer(['type' => 'gold']);
        $silverCustomer = new Customer(['type' =>'silver']);

        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy($silverCustomer));

    }
}
