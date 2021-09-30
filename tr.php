<?php
    trait myTr
    {
        public function sayHi()
        {
            echo 'Привет';
        }
        public  function greet(){
            echo 'Greetings';
        }
    }
    class Person
    {
        use myTr;
        public function  sayHi(){
            echo 'Hello';
        }
    }