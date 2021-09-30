<?php

interface EngineInterface
{
    public function on();

    public function off();



}


class Car
{
    private $color, $year, $creator,$engine;

    function  __construct($color, $year, $creator, EngineInterface $newEngine)
    {
        $this->color=$color;
        $this->year=$year;
        $this->creator=$creator;

        $this->engine=$newEngine;
    }
    public function startEngine()
    {
       $this->engine->on();
    }
}
class  Engine implements EngineInterface
{
    public function on()
    {

    }
    public function off()
    {

    }
}
class anotherEngine implements EngineInterface
{
    public function on()
    {

    }
    public function off()
    {

    }
}
$engine=new Engine();
$anotherEngine = new anotherEngine();
$myCar=new Car('Red',2021,'Lada',$anotherEngine);
?>
<pre>
    <?php
print_r($myCar);
?>
</pre>
