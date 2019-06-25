<?php

interface CarService {
    public function getCoast();
}

class BasicInspection implements CarService {
    public function getCoast(){
        return 19;
    }
}

class OilChange implements CarService{
    protected $carService;

    public function __construct(CarService $carService){
        $this->carService = $carService;
    }
    public function getCoast(){
        return 19 + $this->carService->getCoast();
    }
}

class TairRotation implements CarService{
    protected $carService;

    public function __construct(CarService $carService){
        $this->carService = $carService;
    }
    public function getCoast(){
        return 10 + $this->carService->getCoast();
    }
}

echo (new TairRotation(new OilChange(new BasicInspection())))->getCost();
