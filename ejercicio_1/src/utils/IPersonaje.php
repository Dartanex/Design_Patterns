<?php

    interface ICharacter{
        public function CreateCharacter($characterName);
    }

    interface IAbilities{
        public function createSkills();
        public function setMovementSpeed($speed);
    }