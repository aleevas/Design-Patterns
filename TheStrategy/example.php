<?php

// encapsulate amd make them interchangeable
interface Logger {
    public function log($data);
}


// Define a family of algorithms

class LogToFile implements Logger {
    public function log($data){
        var_dump('Log the data to a file.');
    }

}

class LogToDatabase implements Logger {
    public function log($data){
        var_dump('Log the data to the database.');
    }
}

class LogToExternalWebService implements Logger {
    public function log($data){
        var_dump('Log the data to the external WebService.');
    }
}


class App {
    public function log($data){
        $logger = new LogToFile;
        $logger->log($data);
        
    }
}

(new App)->log('Some information that needs to log');