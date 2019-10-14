<?php
class BMW {
    public function __construct()
    {
        echo "BMW Created";
    }
}

class Mitsubishi {

}

class CarFactory {
    public function __construct($carName)
    {
        switch ($carName) {
            case "BMW": return new BMW();
                break;
            case "Mitsubishi": return new Mitsubishi();
                break;
            default:
                throw new Exception("CarFactory can't create $carName");
        }
    }
}
try {
    $bmw = new CarFactory("F");
} catch (Exception $exception) {
    $bmw = new CarFactory("BMW");
}
?>