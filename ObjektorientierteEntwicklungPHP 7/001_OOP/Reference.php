<?php
    
    $name1 = "Jan";
    $name2 = $name1;
    
    $name2 = "Peter";
    
    echo "name2: " . $name2;
    echo "<br>";
    
    echo "name1: " . $name1;
    echo "<br>";
    
    class Reference {
        public $name;
        
        public function printName(){
            return $this->name . "<br>";
        }
    }
    
    $user1 = new Reference();
    $user1->name = "Jan";
    echo $user1->printName();
    
    $user2 = new Reference();
    $user2->name = "Peter";
    echo $user2->printName();
    
    $user3 = $user1;
    $user3->name = "Kopie";
    echo $user3->printName();
    
    echo "<br>";
    echo "user1: " . $user1->name;
    echo "<br>";
    echo "user2: " . $user2->name;
    echo "<br>";
    echo "user3: " . $user3->name;
    
    
    
    
    
    ?>