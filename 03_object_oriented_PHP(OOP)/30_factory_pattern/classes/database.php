<?php
	class database{
		public $driver;
		public $path;
		
		public function setdriver($take){
			$this->driver= $take;
		}
		public function connect(){
			if($this->driver== "mysql"){
			   $obj_managemysql= new managemysql();
			   $obj_managemysql->sethost($host);
			   $obj_managemysql->setdb($db);
			   $obj_managemysql->setuser($user);
			   $obj_managemysql->setpass($pass);
			   $this->path= obj_managemysql->connect(); //this line means $path variable store value through object.
			   
			}else if($this->driver== "sqlite"){
			   $obj_managemysqlite= new managemysqlite();
			   $obj_managemysqlite->sethost($host);
			   $obj_managemysqlite->setdb($db);
			   $obj_managemysqlite->setuser($user);
			   $obj_managemysqlite->setpass($pass);
			   $this->path= obj_managemysqlite->connect();
			}
		}
		
	}
?>