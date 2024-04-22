<?php
    require_once 'CharacterSamurai.php';
    class Ninja implements ICharacterWeapon{

        public $weapon;

        public function __construct(Samurai $weapon){
            $this->weapon = $weapon;
        }

        public function getWeaponName(){
            return $this->weapon->getWeaponName() . ' Tanto';
        }

        public function getWeaponDescription(){
            return "La Katana Tanto es una espada corta con una hoja de menos de 30 cm de un solo filo, generalmente usada por los ninjas";
        }
    }

    $characterWeapon = new Samurai();
    echo "Arma disponible para personaje Samurai: " . $characterWeapon->getWeaponName();
    echo "<br>";
    echo "Descripción del arma: " . $characterWeapon->getWeaponDescription();
    echo "<br/>";

    $characterWeapon = new Ninja($characterWeapon);
    echo "Arma disponible para personaje Ninja: " . $characterWeapon->getWeaponName();
    echo "<br>";
    echo "Descripción del arma: " . $characterWeapon->getWeaponDescription();
    echo "<br>";