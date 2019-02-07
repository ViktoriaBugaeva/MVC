<?php
class PersonNew
   {
    var $name;
    var $lastname;
    function __construct($name, $lastName) {
        $this->name = $name;
        $this->lastName = $lastName;
    }
            function sayHello(){
        echo 'Привет';
        echo ' My name is '.$this->name;
        echo '. How are doing?';
                
        }            
        
         function sayGoodBye(){
              echo ' Bye ' .$this->lastName;
         }
        
        
    }
    $misha = new PersonNew('Misha', 'Petrov');
    $misha->sayHello();
    $misha->sayGoodBye();