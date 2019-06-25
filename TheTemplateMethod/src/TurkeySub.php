<?php namespace Acme;

class TurkeySub {
    public function make(){
        return $this
                ->layBread()
                ->addLettuce()
                ->addTurkey()
                ->addSauces();
    }

    public function layBread(){
        var_dump('laying down the bread');
        
        return $this;
    }

    public function addLettuce(){
        var_dump('add some lattuce');

        return $this;

    }

    public function addTurkey(){
        var_dump('add really much amount of turkey');
        return $this;

    }

    public function addSauces(){
        var_dump('add cheese sauce');
        return $this;

    }

}