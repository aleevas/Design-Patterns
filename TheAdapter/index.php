<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\Book;
use Acme\Person;


// $person = new Person;
(new Person)->read(new Book);
