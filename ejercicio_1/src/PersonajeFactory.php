<?php
    require_once "PersonajeModoFacil.php";
    require_once "PersonajeModoDificil.php";
    class CharacterFactory {

        public static function create($gamemode){
            switch ($gamemode){
                case "easy": 
                    return new SkeletonEasyMode();
                    break;
                case "hard": 
                    return new ZombieHardMode();
                    break;
                default: 
                    throw new Exception("Ese modo de juego no se encuentra disponible");
                    break;
            }
        }
    }

    $easyMode = CharacterFactory::create("easy");
    $easyMode->CreateCharacter("My Skeleton");

    $hardMode = CharacterFactory::create("hard");