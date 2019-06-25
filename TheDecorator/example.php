<?php

interface CarService {
    public function getCoast();
    public function getDescription();
}

class BasicInspection implements CarService {
    public function getCoast(){
        return 19;
    }

    public function getDescription(){
        return 'Basic inspection';
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

    public function getDescription(){
        return $this->carService->getDescription() .  ', and Oil change';
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

    public function getDescription(){
        return $this->carService->getDescription() .  ', and tair rotation';
    }
}

echo (new TairRotation(new OilChange(new BasicInspection())))->getCost();

$service = new TairRotation(new BasicInspection);

echo $service->getDescription();
