<?php

class Locks {
    public function check(HomeStatus $home){
        
        if (! $home->locked) {
            throw new Exception('The door not locked!');
        }
        // Needs to transfer our status for all next options(Lights, Alarm).
        // Let use The Chain Responsibility Pattern    

    }
}

class Lights {

}

class Alarm {

}

class HomeStatus {
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true;
}

$locks = new Locks;

$status = new HomeStatus;

$locks->check($status);
