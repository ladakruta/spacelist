<?php
class DbItem
{
    protected static $conn = null;
    protected $table;
    
    
    public function __construct(){
        global $servername;
        global $username;
        global $password;
        global $dbname;
        if(!self::$conn){
            self::$conn = new mysqli($servername, $username, $password);
            self::$conn->select_db($dbname);
        }
    }
    
    public function getList($condition = '1'){
        $list = array();
        $sql = "SELECT * FROM {$this->table} WHERE $condition";
        $result = self::$conn->query($sql);
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        return $list;    
    }
    
    public function get($id){
         $sql = "SELECT * FROM {$this->table} WHERE id = $id";
         $result = self::$conn->query($sql);
         return $result->fetch_assoc();
         
    }
    
    public function insert($data){
        foreach($data as &$item){
            $item = "'$item'";
        }
        $sql = "INSERT INTO {$this->table} (".implode(", ",array_keys($data)).") VALUES (".implode(", ", $data).")";
        self::$conn->query($sql);
        return self::$conn->insert_id;
    }
    
    public function update($data){
        foreach($data as $k => $v){
            //TODO
        }
        $sql = "UPDATE {$this->table} SET "; //TODO
    }
    
    public function delete($id){
        $sql = "DELETE FROM {$this->table} WHERE id = $id";
        return self::$conn->query($sql);
    }
    
    
}
