<?php namespace Acme;

use Acme\Sub;

class TurkeySub extends Sub {

    public function addPrimaryToppings(){
        var_dump('add really much amount of turkey');
        return $this;

    }
}