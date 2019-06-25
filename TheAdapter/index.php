<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\Book;
use Acme\Kindle;
use Acme\Person;
use Acme\eReaderAdapter;
use Acme\Nook;

// $person = new Person;
(new Person)->read(new Book);
(new Person)->read(new eReaderAdapter(new Kindle));
(new Person)->read(new eReaderAdapter(new Nook));
