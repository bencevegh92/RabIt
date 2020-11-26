<?php

include_once("model/Class.php");

class Model
{
	//Connect to DB
	protected $dbConn;

	public function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName = "rabit";

		// Create connection
		$this->dbConn = new mysqli($servername, $username, $password, $dbName);

		// Check connection
		if ($this->dbConn->connect_error) {
			die("Connection failed: " . $this->dbConn->connect_error);
		}
	}
	// Getting users
	public function getUserList()
	{
		$sql = "SELECT * FROM users";
		$result = $this->dbConn->query($sql);

		$users = [];

		if ($result) {
			while ($obj = $result->fetch_object('User')) {
				$users[] = $obj;
			}
			$result->free_result();
		}

		return $users;
	}
	// Getting ads
	public function getAdvertismentList()
	{
		// Join the 2 DB table
		$sql = "SELECT a.id, u.name AS userName, a.title FROM advertisements AS a JOIN users AS u ON u.id = a.userId";
		$result = $this->dbConn->query($sql);

		$ads = [];

		if ($result) {
			while ($obj = $result->fetch_object('Advertisement')) {
				$ads[] = $obj;
			}
			$result->free_result();
		}

		return $ads;
	}
}
