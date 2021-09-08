<?php
class client
{
  private $name;
  private $description;
  private $date;
  
  public function __construct(string $name, string $description, string $date){
   
     $this->name = $name;
     $this->description = $description;
     $this->date = $date; 
  }

    public function summary()  {
        echo "Client:  $this->$name<br>name:$this->$description<br>description:$this->$date<br>date:"; 
        echo "<br>";   
  
    }
    public function getName() {
        return $this->name;
    }
    public function getDescrption() {
        return $this->description;
    }
    public function getDate() {
        return $this->date;
    }
}
?>
