<?php

class BasicInspection {
    public function getCoast(){
        return 19;
    }
}

class BasicInspectionAndOilChange {
    public function getCoast(){
        return 19+19; // first 19 is a basic inspection
    }
}

class BasicInspectionAndOilChangeAndTairRotation {
    public function getCoast(){
        return 19+19+10; // first 19 is a basic inspection, second - OilChabne
    }
}

echo (new BasicInspectionAndOilChangeAndTairRotation())->getCost();
