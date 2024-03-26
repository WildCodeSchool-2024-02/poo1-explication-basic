<?php

/**
 * Classe Cat
 * author : Yavuz KUTUK
 * date : 26-03-2024
 */
class Cat
{
    private string $name;
    private string $color;
    private int $age;

    public function __construct(string $name, string $color, int $age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge(int $nouvelAge)
    {

        $this->age = $nouvelAge;

        return $this;
    }
}
