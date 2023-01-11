<?php
    class database{
        public $driver;
        public $link;
        
        public function setDatabase($driver){
            $this->driver = $driver;
        }
        
        public function connect(){
          if($this->driver == "mysql"){
            $mngmysql = new mangeMysul();
            $mngmysql ->setHost();
            $mngmysql ->DB($db);
            $mngmysql ->setUser($user);
            $mngmysql ->setPass($pass);
           $this->link = $mngmysql ->contante();
          }
          
          elseif($this->driver == "sqlite"){
            $mngmysqlink = new mangeMysulink();
            $mngmysqlink ->setHost();
            $mngmysqlink ->DB($db);
            $mngmysqlink ->setUser($user);
            $mngmysqlink ->setPass($pass);
           $this->link = $mngmysqlink ->contante();
        }
    }
    
 }
 
 
?>