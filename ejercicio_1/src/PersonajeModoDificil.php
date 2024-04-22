<?php

    class ZombieHardMode implements ICharacter, IAbilities{

        public $characterName;
        public $skill = [];
        public $movementSpeed;

        public function CreateCharacter($characterName){
            $this->characterName = $characterName;
        }

        public function createSkills(){
            $this->skill = [
                "Dependera de la clase escogida"
            ];

            return "Habilidades agregadas exitosamente";
        }

        public function setMovementSpeed($speed){
            $this->movementSpeed = $speed;

            return "Velocidad de movimiento del personaje: " . $this->movementSpeed;
        }
    }