<?php
include_once("model/Model.php");

class Controller
{
	public $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function users()
	{
		$users = $this->model->getUserList();
		include 'view/userlist.php';
	}

	public function main()
	{
		include 'view/landingpage.php';
	}

	public function ads()
	{
		$ads = $this->model->getAdvertismentList();
		include 'view/advertisements.php';
	}
}
