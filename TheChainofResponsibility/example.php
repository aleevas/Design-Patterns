<?php

abstract class HomeChecker {
    protected $successor;

    public abstract function check(HomeStatus $home);

    public function succedWith(HomeChecker $successor) {
        $this->successor = $successor;
    }
    public function next(HomeStatus $home) {
        if ($this->successor) {
            $this->successor->check($home);
        }
    }
}

class Locks extends HomeChecker {
    public function check(HomeStatus $home){
        
        if (! $home->locked) {
            throw new Exception('The door not locked!');
        }
        // Let's call next check.   
        $this->next($home);
    }
}

class Lights extends HomeChecker {
    public function check(HomeStatus $home){
        
        if (! $home->lightsOff) {
            throw new Exception('Turn lights on!');
        }
        // Let's call next check.   
        $this->next($home);
    }
}

class Alarm extends HomeChecker {
    public function check(HomeStatus $home){
        
        if (! $home->alarmOn) {
            throw new Exception('Turn alarm on!');
        }
        // Let's call next check.
        $this->next($home);
    }
}

class HomeStatus {
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true; // for get an exception, just set it to false
}

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succedWith($lights);
$lights->succedWith($alarm);
$locks->check(new HomeStatus);
