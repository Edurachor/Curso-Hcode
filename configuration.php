<?php
class Sql {
	public $conn;

	public function __construct(){

		return $this->conn = mysqli_connect("127.0.01","root","","hcode_shop");

	}
	public function query($string_query){]

		return mysqli_query($this->conn, $string_query);

	}

	public function __destruct(){

		mysql_close()($this->conn);
	}

}
?>