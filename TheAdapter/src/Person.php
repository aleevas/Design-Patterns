<?php

namespace Acme;

class Person {
    public function read($book){
        $book->open();
        $book->turnPage();
    }
}
