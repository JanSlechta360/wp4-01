<?php
class website
{
      private $domain;
      private $date;
      private $description;
      private $category;
      private $client;

      public function __construct(string $domain, string $date, string $description, int $category, client $client){
   
        $this->domain = $domain;
        $this->date = $date;
        $this->description = $description;
        $this->category = $category;
        $this->client = $client;
    }
      public function summary()  {
        echo "Website:  $this->$domain<br>domain:$this->$date<br>date:$this->$description<br>description:$this->$category<br>category:$this->$client<br>client:"; 
        echo "<br>";   
                     
    }
    public function getDomain() {
        return $this->domain;
    }
    public function getDate() {
        return $this->date;
    }
    public function getDescription() {
        return $this->description;
    }
    public function getCategory() {
        return $this->category;
    }
    public function getClient() {
        return $this->client;
    }
}
?>