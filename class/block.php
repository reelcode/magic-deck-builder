<?php
    class Block {

        protected $cardCount; // sum of $cardCount in expansions
        protected $dateRelease; // release date of block
        protected $dateRotation;// date when block rotates out of the standard format
        protected $expansions; // array
        protected $expCode; // expansion code, 3 capital letters
        protected $name;
        protected $symbol; // ExpSymbol object?


        public function __construct($name, $expCode = null) {

            $this->name = (isset($name) && is_string($name)) ? $name : null;
            $regex = '/^[a-z]{3}$/'; // regex for valid expansion code, 3 letters, no need to force uppercase here
            $this->expCode = (isset($expCode) && is_string($expCode) && preg_match($regex, $expCode)) ? strtoupper($expCode) : null; // all caps when valid

        }

    }
