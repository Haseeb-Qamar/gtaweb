<?php

class database{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private static $object;
    private $connection;
    private $results;
    private $numrows;
    private function __construct(){

    }
    static function getInstance(){
        if(!self::$object){
//            echo "DB Object Created";
            self::$object = new self();
        }
        return self::$object;
    }
    function connect($host, $user, $pass, $dbname){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
        $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);

    }
    public function doQuery($sql){
        $this->results = mysqli_query($this->connection, $sql);
        if($this->results == TRUE){
            $this->numrows = $this->results->num_rows;
        }else echo $this->connection->error;
    }
    public function loadObjectList(){
        $obj = "No Results";
        if($this->results){
            $obj = mysqli_fetch_assoc($this->results);

        }
        return $obj;
    }
    public function showall(){
        $obj = "No Results";
        if($this->results){

          echo "<table>
          <tr id='trow'><th>Effect</th><th>Code</th></tr>


          ";
            while($obj = mysqli_fetch_assoc($this->results)){
                echo "
                <tr><td>".$obj['info']."</td><td>".$obj['code']."</td></tr>
                ";
            }
            echo "</table>";
        }

    }
    public function showcount(){
      $count = "No Data";
      if($this->results){
        echo $this->results->num_rows;
      }
    }
}

?>
