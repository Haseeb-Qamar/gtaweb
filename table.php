<?php

class table{
    protected $id = null;
    protected $table = null;
    function __constructor(){

    }
    function bind($data){
        foreach($data as $key=>$value){
            $this->$key = $value;
        }
    }
    function load($id){
        $this->id = $id;
        $dbo = database::getInstance();
        $sql = $this->buildQuery('load');
        $dbo->doQuery($sql);
        $row = $dbo ->loadObjectList();
        foreach($row as $key=>$value){
            if($key == "id"){
                continue;
            }
            $this->$key = $value;

        }
    }
    function iterate(){

        $dbo = database::getInstance();
        $sql = $this->buildQuery('iterate');
        $dbo->doQuery($sql);
        $dbo ->showall();

    }
    function displayrecords(){
        $dbo = database::getInstance();
        $sql = $this->buildQuery('count');
        $dbo->doQuery($sql);
        $dbo->showcount();
    }
    function store(){
        $dbo = database::getInstance();
        $sql = $this->buildQuery('store');
        $dbo->doQuery($sql);
    }
    function buildQuery($task){
        $sql = "";
        if($task == 'store'){
            if($this->id == ''){
                $keys = "";
                $values = "";
                $classVars = get_class_vars(get_class($this));
                echo "adding";
                $sql .= "INSERT INTO {$this->table}";
                foreach($classVars as $key=>$value){
                    if($key == "id" || $key == "table"){
                        continue;
                    }
                    $keys .= "{$key},";
                    $values .= "'{$this->$key}',";

                }
                $sql .= "(".substr($keys, 0, -1).") VALUES(".substr($values, 0, -1).")";



            }else{
                $classVars = get_class_vars(get_class($this));
                echo "updating";
                $sql .= "UPDATE {$this->table} SET ";
                foreach($classVars as $key=>$value){
                     if($key == "id" || $key == "table"){
                        continue;
                    }
                    $sql .= "{$key} = '{$this->$key}',";
                }
                $sql .= substr($sql,0 ,-2)."WHERE id = {$this->id}";
            }
        }elseif($task == 'load'){
            $sql = "SELECT * FROM {$this->table} WHERE id = '{$this->id}'";
        }
        elseif($task == 'iterate'){
            $sql = "SELECT * FROM {$this->table}";
        }
        elseif($task == 'count'){
            $sql = "SELECT * FROM {$this->table}";
        }
        return $sql;
    }
}

?>
