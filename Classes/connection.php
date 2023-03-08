<?php 

	class Connection{
		private $con="";

		function connect(){
			$con = $this->con= new mysqli("localhost","root","","project");
			return $con;
		}
	}