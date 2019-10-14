<?php
interface IJump {
    public function jump($high);
}

interface IMakeBarrel {
    public function makeBarrel();
}

interface IEatWorm {
    public function eatWorm();
}

abstract class  Animal {
    abstract function move($speed);
}

class LandAnimal extends Animal implements IJump {
    public function move($speed) {
        return "Land animal move with speed $speed";
    }
    public function jump($high) {
        return "Land animal jumped $high high";
    }
}

class SwimAnimal extends Animal implements IEatWorm {
    public function move($speed) {
        return "Swim animal swim with speed $speed";
    }
    public function eatWorm()
    {
        return "Swim animal eat worm";
    }
}

class FlyAnimal extends Animal implements IMakeBarrel {
    public function move($speed) {
        return "Fly animal fly with speed $speed";
    }
    public function makeBarrel()
    {
        return "Fly animal make barrel!";
    }
}
$flyAnimal = new FlyAnimal();
echo $flyAnimal->move(5) . "<br>";
echo $flyAnimal->makeBarrel() . "<br>";
$landAnimal = new LandAnimal();
echo $landAnimal->move(5) . "<br>";
echo $landAnimal->jump(5) . "<br>";
$swimAnimal = new SwimAnimal();
echo $swimAnimal->move(5) . "<br>";
echo $swimAnimal->eatWorm();
?>