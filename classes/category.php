<?php
class category
{
      private $name;
      private $description;

      public function __construct(string $name, string $description,){
   
        $this->name = $name;
        $this->description = $description;

    }
      public function summary()  {
        echo "Category:  $this->$name<br>name:$this->$description<br>description:"; 
        echo "<br>";   
                     
    }
    public function getName() {
        return $this->name;
    }
    public function getDescription() {
        return $this->description;
    }
}
?>