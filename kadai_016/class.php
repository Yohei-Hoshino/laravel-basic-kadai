<?php

    class Food {
        private $name;
        private $price;

        public function __construct(string $name, int $price) {
            $this->name = $name;
            $this->price = $price;
        }

        public function show_price() {
            echo $this->price . '<br>';
        }
    }

    class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height() {
            echo $this->height . '<br>';
        }
    }

    $food = new Food("なす", 500);
    $animal = new Animal("しろくま", 180, 100);

    print_r($food);
    print_r($animal);

    echo "<br>";

    $food->show_price();
    $animal->show_height();

?>