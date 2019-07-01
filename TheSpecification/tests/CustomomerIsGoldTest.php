<?php

class CustomerIsGoldTest extends PHPUnit\Framework\TestCase {
    
    function testIfCustomerHaveRespectiveType() {

        $specification = new CustomerIsGold;

        $goldCustomer = new Customer('gold');
        $silverCustomer = new Customer('silver');

        $this->assertTrue($specification->isSatisfyedBy($goldCustomer));
        $this->assertFalse($specification->isSatisfyedBy($silverCustomer));

    }
}
