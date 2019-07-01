<?php

class CustomerIsGold {
    
    public function isSatisfyedBy(Customer $customer) {
        
        return $customer->type() == 'gold';
    
    }
}
