<?php

class stopBreathException extends Exception {

}

trait stopBreath {
    public function stopBreathTime($time) {
        if ($time > 30)
        {
            throw new stopBreathException("You really?");
        }
        else
            return "Animal stop breath $time seconds";
    }
}
abstract class  Animal {
    abstract function move($speed);
}

class LandAnimal extends Animal {
    use stopBreath;
    public function move($speed) {
        return "Land animal move with speed $speed";
    }
}

class SwimAnimal extends Animal {
    use stopBreath;
    public function move($speed) {
        return "Swim animal swim with speed $speed";
    }
}

class FlyAnimal extends Animal {
    public function move($speed) {
        return "Fly animal fly with speed $speed";
    }
}
$landAnimal = new LandAnimal();
echo $landAnimal->stopBreathTime(5) . "<br>";
$flyAnimal = new FlyAnimal();
//echo $flyAnimal->stopBreathTime(5);
try {
    $landAnimal->stopBreathTime(40);
} catch (stopBreathException $exception) {
    echo "Animal cant stop breath more then 30 seconds";
}
?>