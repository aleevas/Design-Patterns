<?php namespace Acme;

use Acme\Sub;

class VeggieSub extends Sub {

    public function addPrimaryToppings(){
        var_dump('add a bit of veggies');
        return $this;

    }

}
