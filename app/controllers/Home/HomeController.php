<?php
  require_once ROOT . '/MVC/app/models/Home/HomeModel.php';

  class HomeController extends Controller
  {
    private $model;

    public function __construct()
    {
      $this->model = new HomeModel();
    }

    public function getUser($id)
    {
      $user = $this->model->getUser($id);
      $this->show($user);
    }

    public function show($param)
    {
      $params = array('nombre' => $param['vchAlimento']);
      $this->render(__CLASS__, $params);
    }

    public function exec($param)
    {
      $this->show($param);
    }
  }