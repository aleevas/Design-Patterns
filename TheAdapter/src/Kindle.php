<?php

namespace Acme;

use Acme\eReaderInterface;

class Kindle implements eReaderInterface {
    public function open(){
        var_dump('Opening the Kindle book');
    }

    public function pressNextPageButton(){
        var_dump("Press next page of the Kindle book");
    }
}