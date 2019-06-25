<?php

namespace Acme;

use Acme\eReaderInterface;

class Nook implements eReaderInterface {
    public function turnOn(){
        var_dump('Opening the Nook book');
    }

    public function pressNextPageButton(){
        var_dump("Press next page of the Nook book");
    }
}
