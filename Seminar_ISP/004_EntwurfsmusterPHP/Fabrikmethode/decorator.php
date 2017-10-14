<?php

require_once 'classes/CarBase.class.php';
require_once 'classes/Car.class.php';
require_once 'classes/CarFactory.class.php';
require_once 'classes/EngineKitFactory.class.php';

require_once 'classes/EngineKit.class.php';
require_once 'classes/GasEngineKit.class.php';
require_once 'classes/DieselEngineKit.class.php';
//require_once 'classes/CarObserver.class.php';
//require_once 'classes/EnergySourceObserver.class.php';

require_once 'classes/CarDecorator.class.php';
require_once 'classes/Spoilerkit.class.php';
require_once 'classes/Turbo.class.php';
require_once 'classes/WideTires.class.php';
require_once 'classes/ChipTuning.class.php';
//require_once '.class.php';

$engineKit = EngineKitFactory::createEngineKit('GasEngineKit', $engineName);
$car_1 = CarFactory::createCar('TestWagen');

echo "<h3>Gas-Motor</h3><br><hr>";

$car_1->insertEngine($engineKit);
$car_1->displayInformation();

$car_1 = new Spoilerkit($car_1);
$car_1->displayInformation();

$car_1 = new WideTires($car_1);
$car_1->displayInformation();

$car_1 = new Turbo($car_1);
$car_1->displayInformation();

$car_1 = new ChipTuning($car_1);
$car_1->displayInformation();

?><hr><?php

echo "<h3>Benzin-Motor</h3><br><hr>";

$engineKit = EngineKitFactory::createEngineKit('DieselEngineKit', $engineName);
$car_2 = CarFactory::createCar('TestWagen');
$car_2->insertEngine($engineKit);
$car_2->displayInformation();

$car_1 = new Spoilerkit($car_1);
$car_1->displayInformation();

$car_1 = new WideTires($car_1);
$car_1->displayInformation();

$car_1 = new Turbo($car_1);
$car_1->displayInformation();

$car_1 = new ChipTuning($car_1);
$car_1->displayInformation();